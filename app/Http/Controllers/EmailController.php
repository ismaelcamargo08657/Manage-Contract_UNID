<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function enviarContrato()
    {
        $idColaborador = auth()->user()->idColaborador;
        $emailUser = DB::table('colaborador')->where('idColaborador', $idColaborador)->value('Email');
        if (!$emailUser) {
            return back()->with('error', 'No se encontró un correo registrado.');
        }
        $rutaPDF = storage_path("app/public/Datos_Colaborador/$idColaborador/historial/contrato_actual/contrato_{$idColaborador}.pdf");
        if (!file_exists($rutaPDF)) {
            return back()->with('error', 'El contrato PDF no existe. Primero genera el archivo.');
        }
        Mail::send('emails.contrato', [], function ($message) use ($emailUser, $rutaPDF) {
            $message->to($emailUser)->subject('📄 Su Contrato Digital')->attach($rutaPDF, ['as' => 'contrato.pdf', 'mime' => 'application/pdf']);
        });
        return back()->with('success', 'Contrato enviado a: ' . $emailUser);
    }
}
