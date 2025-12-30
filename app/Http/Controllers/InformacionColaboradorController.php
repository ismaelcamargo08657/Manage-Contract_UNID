<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InformacionColaboradorController extends Controller
{
    public function index()
    {
        $idUsuario = Auth::user()->idColaborador;

        $data = DB::selectOne("
            SELECT 
                c.idColaborador,
                col.Nombre,
                col.Apellido_Paterno,
                col.Apellido_Materno,
                col.Edad,
                col.Sexo,
                col.Telefono,
                col.Email,
                col.Direccion,
                comp.CURP,
                comp.RFC,
                comp.Emergencia_Nombre,
                comp.Emergencia_Telefono,
                comp.Emergencia_Parentesco,
                ce.Nombre AS Nombre_Cedis,
                ce.Direccion AS Direccion_Cedis,
                ce.Responsable AS Responsable_Cedis
            FROM nxgcommx_intranet_cya.contratos c
            INNER JOIN nxgcommx_intranet_cya.colaborador col
                ON c.idColaborador = col.idColaborador
            INNER JOIN nxgcommx_intranet_cya.complementos comp
                ON col.idColaborador = comp.id_colaborador
            LEFT JOIN nxgcommx_intranet_cya.cedis ce
                ON comp.zona = ce.id
            WHERE c.idColaborador = ?
        ", [$idUsuario]);


        $data->FechaNacimiento = $this->getBirthdateFromCurp($data->CURP);

        return view('contrats.informacionColaborador', compact('data'));
    }

    private function getBirthdateFromCurp($curp)
    {
        if (strlen($curp) < 10) {
            return null;
        }

        $year = substr($curp, 4, 2);
        $month = substr($curp, 6, 2);
        $day = substr($curp, 8, 2);

        $currentYear = date('y');


        if ($year <= $currentYear) {
            $year = '20' . $year;
        } else {
            $year = '19' . $year;
        }

        return "$year-$month-$day";
    }

    public function guardarDatos(Request $request)
    {
        $request->validate([
            'estadoCivil' => 'required|string|max:30',
            'claveElector' => 'required|string|size:18',
        ]);

        $idUsuario = Auth::user()->idColaborador;

        DB::table('contratos')
            ->where('idColaborador', $idUsuario)
            ->update([
                'estado_civil' => $request->estadoCivil,
                'clave_lector' => $request->claveElector,
                'updated_at' => now()
            ]);

        return redirect()->back()->with('success', 'Datos guardados correctamente');
    }
}
