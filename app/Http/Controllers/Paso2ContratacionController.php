<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Paso2ContratacionController extends Controller
{
    public function mostrarMain()
    {
        $idUsuario = Auth::user()->idColaborador;

  
        $data = DB::selectOne("
            SELECT 
                col.Nombre,
                col.Apellido_Paterno,
                col.Apellido_Materno
            FROM nxgcommx_intranet_cya.contratos c
            INNER JOIN nxgcommx_intranet_cya.colaborador col
                ON c.idColaborador = col.idColaborador
            WHERE c.idColaborador = ?
        ", [$idUsuario]);


        $nombreCompleto = $data
            ? $data->Nombre . ' ' . $data->Apellido_Paterno . ' ' . $data->Apellido_Materno
            : "COLABORADOR";

        $contrato = DB::table('contratos')
            ->where('idColaborador', $idUsuario)
            ->first();

        return view('contrats.main', [
            'nombreCompleto' => $nombreCompleto,
            'contrato' => $contrato  
        ]);
    }
}
