<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class INEController extends Controller
{
    public function guardarINE(Request $request)
    {
        try {

            $request->validate([
                'idColaborador' => 'required|integer',
                'ine_anverso' => 'required|image|mimes:jpg,png,jpeg|max:4096',
                'ine_reverso' => 'required|image|mimes:jpg,png,jpeg|max:4096'
            ]);

            $id = $request->idColaborador;

            $folder = "public/Datos_Colaborador/$id";
            $historialFolder = "public/Datos_Colaborador/$id/historial";

            Storage::makeDirectory($folder);
            Storage::makeDirectory($historialFolder);

            $fecha = now()->format('Y-m-d_H-i-s');

            $names = [
                "ine_anverso_$id",
                "ine_reverso_$id"
            ];

            foreach (Storage::files($folder) as $file) {
                foreach ($names as $name) {
                    if (strpos($file, $name) !== false) {
                        $ext = pathinfo($file, PATHINFO_EXTENSION);
                        Storage::move(
                            $file,
                            "$historialFolder/{$name}_$fecha.$ext"
                        );
                    }
                }
            }

            $request->file('ine_anverso')->storeAs(
                $folder,
                "ine_anverso_{$id}." . $request->file('ine_anverso')->getClientOriginalExtension()
            );

            $request->file('ine_reverso')->storeAs(
                $folder,
                "ine_reverso_{$id}." . $request->file('ine_reverso')->getClientOriginalExtension()
            );

            \DB::table('contratos')
                ->where('idColaborador', $id)
                ->update(['status_ine' => 1]);

            return back()->with('success', 'INE subida correctamente. Ahora está en validación.');
        } catch (\Throwable $th) {
            return back()->with('error', 'Ocurrió un error al guardar la INE: ' . $th->getMessage());
        }
    }

    public function guardarFirma(Request $request)
    {
        try {

            $request->validate([
                'idColaborador' => 'required|integer',
                'firma' => 'required|string'
            ]);

            $id = $request->idColaborador;


            $status = \DB::table('contratos')
                ->where('idColaborador', $id)
                ->value('status_ine');

            if ($status != 0) {
                return back()->with('error', 'Tu INE no ha sido validada. No puedes firmar aún.');
            }


            $statusFirma = \DB::table('contratos')
                ->where('idColaborador', $id)
                ->value('status_firma');

            if ($statusFirma == 0) {
                return back()->with('error', 'Ya tienes una firma registrada. No puedes firmar nuevamente.');
            }


            $baseFolder = "public/Datos_Colaborador/$id";
            $historialFolder = "$baseFolder/historial";
            $firmasColaboradorFolder = "$historialFolder/firmas_colaborador";
            $firmasRegistradasFolder = "$historialFolder/firmas_registradas";

            Storage::makeDirectory($baseFolder);
            Storage::makeDirectory($historialFolder);
            Storage::makeDirectory($firmasColaboradorFolder);
            Storage::makeDirectory($firmasRegistradasFolder);

            $fileName = "firma_{$id}.png";
            $rutaActualFirma = "$firmasColaboradorFolder/$fileName";

            if (Storage::exists($rutaActualFirma)) {
                $fecha = now()->format('Y-m-d_H-i-s');
                Storage::move(
                    $rutaActualFirma,
                    "$firmasRegistradasFolder/firma_{$id}_{$fecha}.png"
                );
            }

            $image = str_replace('data:image/png;base64,', '', $request->firma);
            $image = base64_decode(str_replace(' ', '+', $image));

            Storage::put($rutaActualFirma, $image);


            \DB::table('contratos')
                ->where('idColaborador', $id)
                ->update(['status_firma' => 0]);

            return back()->with('success', 'Firma guardada correctamente.');
        } catch (\Throwable $th) {
            return back()->with('error', 'Ocurrió un error al guardar la firma: ' . $th->getMessage());
        }
    }


    public function vistaIne()
    {
        try {

            $user = auth()->user();

            $contrato = \DB::table('contratos')
                ->where('idColaborador', $user->idColaborador)
                ->first();

            return view('contrats.firma_digital', [
                'status_ine' => $contrato->status_ine,
                'status_firma' => $contrato->status_firma
            ]);
        } catch (\Throwable $th) {
            return back()->with('error', 'Error al cargar la vista: ' . $th->getMessage());
        }
    }
}
