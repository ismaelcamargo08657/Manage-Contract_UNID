<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Contrato;
use Carbon\Carbon;


class ContratoController extends Controller
{

    public function mostrarContrato()
    {
        $idColaborador = auth()->user()->idColaborador;

        $data = DB::selectOne("
            SELECT 
                col.Nombre,
                col.Apellido_Paterno,
                col.Apellido_Materno,
                 col.Email,
                 col.Edad, 
                 col.Sexo,
                   col.Direccion,
                   
        col.Colonia,
                comp.Puesto,
                 comp.RFC,
                 comp.Emergencia_Nombre,
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

        $nombreCompleto = $data->Nombre . ' ' . $data->Apellido_Paterno . ' ' . $data->Apellido_Materno;
        $domicilio = trim(
            ($data->Direccion ?? '') .
            ($data->Colonia ? ', ' . $data->Colonia : '')
        );

$fechaIngreso = Carbon::parse($data->Fecha_Ingreso);
$fechaFinContrato = $fechaIngreso->copy()->addDays(30);




        $contrato = DB::table('contratos')
            ->where('idColaborador', $idColaborador)
            ->first();

        return view('contrats.contrato', [
            'nombreCompleto' => $nombreCompleto,
            'puesto' => $data->Puesto ?? "SIN PUESTO",
            'idColaborador' => $idColaborador,
            'estatus_contratoDigital' => $contrato->status_contratos ?? 1,
            'edad' => $data->Edad,
              'fechaIngreso' => $fechaIngreso,         
    'fechaFinContrato' => $fechaFinContrato, 
            'Sexo' => $data->Sexo,
            'claveLector' => $contrato->clave_lector,
            'domicilio' => $domicilio,
            'rfc' => $data->RFC,
            'beneficiario' => $data->Emergencia_Nombre,
            'email' => $data->Email

        ]);
    }
    public function aceptarContrato(Request $request)
    {
        $idColaborador = auth()->user()->idColaborador;

        DB::table('contratos')
            ->where('idColaborador', $idColaborador)
            ->update([
                'status_contratos' => 0
            ]);

        return redirect()->route('main');
    }

    public function viewContrato()
    {
        try {
            return response()->file(storage_path('app/public/Datos_Colaborador/' . Auth::user()->idColaborador . '/historial/contrato_actual/contrato_' . Auth::user()->idColaborador . '.pdf'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
