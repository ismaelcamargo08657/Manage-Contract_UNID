<?php

use App\Http\Controllers\CuestionarioMedicoDataController;
use App\Http\Controllers\FlujoMainController;
use App\Http\Controllers\InformacionColaboradorController;
use App\Http\Controllers\SolicitudEmpleoDataController;
use App\Http\Controllers\ValidacionIneController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\SolicitudEmpleoController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\Paso2ContratacionController;
use App\Http\Controllers\INEController;
use App\Http\Controllers\AnexosController;
use App\Http\Controllers\MainController;



use App\Http\Controllers\EmailController;

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/informacion_basica', [App\Http\Controllers\InformacionBasicaController::class, 'index'])->name('informacion_basica');

    //Obtencion de informacion
    Route::get('/getInformation', [InformacionColaboradorController::class, 'index'])->name('informacionColaborador');


    //Información de main

    Route::get('main', [Paso2ContratacionController::class, 'mostrarMain'])->name('main');

    Route::get('/getStatusColaborador', [FlujoMainController::class, 'getStatus']);

    // validacionIne
    Route::get('/firma_digital', [INEController::class, 'vistaIne'])->name('firma_digital');



    Route::get('/anexos', function () {
        return view('contrats.anexos');
    })->name('anexos');

    Route::get('/anexos', [AnexosController::class, 'mostrarAnexo'])
        ->name('anexos');

    //contrato

    Route::get('/contrato', [ContratoController::class, 'mostrarContrato'])->name('contrato');

    Route::post('/contrato/aceptar', [ContratoController::class, 'aceptarContrato'])
        ->name('contrato.aceptar');




    // contrato_pdf

    //solicitud de empleo

    Route::get('/solicitud_empleo', [SolicitudEmpleoDataController::class, 'index'])->name('solicitud_empleo');


    //cuestionario medico
    Route::get('/cuestionario_medico', [CuestionarioMedicoDataController::class, 'index'])->name('cuestionario_medico');
    Route::post('/saveCuestionarioMedico', [CuestionarioMedicoDataController::class, 'store'])->name('saveCuestionarioMedico');
    Route::get('/c_datos_generales', function () {
        return view('contrats.cuestionario_medico.c_datos_generales');
    }); //eliminar despues de uni con el controlador



    Route::post('/aceptar-anexos', [ContratoController::class, 'aceptarAnexos'])->name('aceptar.anexos');
    Route::post('/aceptar-contrato', [ContratoController::class, 'aceptar'])->name('aceptar.contrato');
    Route::post('/update-contract', [ContratoController::class, 'updateStatusContratoDigital'])->name('update.contrat');

    // Email
    Route::post('/solicitud-empleo', [SolicitudEmpleoController::class, 'store'])->name('solicitud.store');


    Route::get('/generar-pdf', [PdfController::class, 'generar'])->name('generar.pdf');
    Route::post('/enviar-contrato', [EmailController::class, 'enviarContrato'])
        ->name('enviar.contrato');


    //isma



    Route::get('/contrats/main', [Paso2ContratacionController::class, 'mostrarMain'])
        ->name('contrats.main');


    Route::post('/guardar-ine-firma', [App\Http\Controllers\INEController::class, 'guardarINE'])
        ->name('guardar.ine');


    Route::post('/guardar-firma', [INEController::class, 'guardarFirma'])->name('guardar.firma');


    Route::post('/aceptar-anexo', [AnexosController::class, 'aceptarAnexo'])
        ->name('aceptar.anexo');


    Route::post(
        '/guardar-datos-contrato',
        [InformacionColaboradorController::class, 'guardarDatos']
    )->name('contrato.guardar');
});
