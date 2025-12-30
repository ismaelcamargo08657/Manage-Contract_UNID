<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Contrato;

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

        $nombreCompleto = $data->Nombre . ' ' . $data->Apellido_Paterno . ' ' . $data->Apellido_Materno;


        $contrato = DB::table('contratos')
            ->where('idColaborador', $idColaborador)
            ->first();

        return view('contrats.contrato', [
            'nombreCompleto' => $nombreCompleto,
            'puesto' => $data->Puesto ?? "SIN PUESTO",
            'idColaborador' => $idColaborador,
            'estatus_contratoDigital' => $contrato->status_contratos ?? 1,

            'fechaIngreso' => $data->Fecha_Ingreso,
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

        return redirect()->back()->with('success', 'Contrato aceptado correctamente.');
    }
}
