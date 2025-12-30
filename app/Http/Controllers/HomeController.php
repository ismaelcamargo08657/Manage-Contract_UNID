<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function index()
{
    $contrato = auth()->user(); 

    $nombreCompleto = null;

    if ($contrato && $contrato->colaborador) {
        $col = $contrato->colaborador;
        $nombreCompleto = "{$col->Nombre} {$col->Apellido_Paterno} {$col->Apellido_Materno}";

    }

    return view('home', compact('nombreCompleto'));
}

}
