<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AnexosController extends Controller
{
    public function mostrarAnexo()
    {
        $idColaborador = auth()->user()->idColaborador;

        $data = DB::selectOne("
            SELECT 
                col.Nombre,
                col.Apellido_Paterno,
                col.Apellido_Materno,
                comp.Puesto
            FROM nxgcommx_intranet_cya.colaborador col
            LEFT JOIN nxgcommx_intranet_cya.complementos comp
                ON comp.id_colaborador = col.idColaborador
            WHERE col.idColaborador = ?
            LIMIT 1
        ", [$idColaborador]);

        $nombreCompleto = $data->Nombre . ' ' . $data->Apellido_Paterno . ' ' . $data->Apellido_Materno;
        $puesto = $data->Puesto ?? "SIN PUESTO";

        $contrato = DB::table('contratos')
            ->where('idColaborador', $idColaborador)
            ->first();

        return view('contrats.anexos', [
            'nombreCompleto' => $nombreCompleto,
            'puesto' => $puesto,
            'idColaborador' => $idColaborador,
            'status_anexos' => $contrato->status_anexos ?? 1,
        ]);
    }

    //public function aceptarAnexo()
    //{
        //$idColaborador = auth()->user()->idColaborador;

        //DB::table('contratos')
          //  ->where('idColaborador', $idColaborador)
            //->update(['status_anexos' => 0]);

        //return redirect()->back()->with('success', '¡Has aceptado los anexos!');
   // }
}
