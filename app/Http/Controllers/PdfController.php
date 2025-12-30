<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
   public function generar()
{
    $idColaborador = auth()->user()->idColaborador;


    $data = DB::selectOne("
        SELECT 
            col.Nombre,
            col.Apellido_Paterno,
            col.Apellido_Materno,
            comp.Puesto,
            comp.Fecha_Ingreso
        FROM nxgcommx_intranet_cya.colaborador col
        LEFT JOIN nxgcommx_intranet_cya.complementos comp
            ON comp.id_colaborador = col.idColaborador
        WHERE col.idColaborador = ?
        LIMIT 1
    ", [$idColaborador]);

    if (!$data) {
        return abort(404, "No se encontró información del colaborador.");
    }


    $contrato = DB::table('contratos')
        ->where('idColaborador', $idColaborador)
        ->first();

    if (!$contrato) {
        return abort(404, "No existe registro de contrato para este colaborador.");
    }

   
    if ($contrato->pdf_status == 0) {
        return abort(403, "El contrato ya fue generado.");
    }


    $nombreCompleto = $data->Nombre . ' ' . $data->Apellido_Paterno . ' ' . $data->Apellido_Materno;

    $pdf = Pdf::loadView('contrats.contrato_pdf', [
        'nombreCompleto' => $nombreCompleto,
        'puesto' => $data->Puesto ?? "SIN PUESTO",
        'idColaborador' => $idColaborador,
        'estatus_contratoDigital' => $contrato->status_contratos ?? 1,
        'status_anexos' => $contrato->status_anexos ?? 1,
        'fechaIngreso' => $data->Fecha_Ingreso
    ]);

 
    $basePath = storage_path("app/public/Datos_Colaborador/$idColaborador/historial/");
    $pathActual = $basePath . "contrato_actual/";
    $pathPasados = $basePath . "contratos_pasados/";

    if (!file_exists($pathActual)) mkdir($pathActual, 0777, true);
    if (!file_exists($pathPasados)) mkdir($pathPasados, 0777, true);

    $currentFileName = "contrato_{$idColaborador}.pdf";
    $currentFilePath = $pathActual . $currentFileName;


    if (file_exists($currentFilePath)) {
        $timestamp = date('Y-m-d_H-i-s');
        $newPastFileName = "contrato_{$idColaborador}_{$timestamp}.pdf";
        rename($currentFilePath, $pathPasados . $newPastFileName);
    }

 
    file_put_contents($currentFilePath, $pdf->output());


    DB::table('contratos')
        ->where('idColaborador', $idColaborador)
        ->update([
            'pdf_status' => 0   
        ]);

    return $pdf->stream("contrato_{$idColaborador}.pdf");
}

}
