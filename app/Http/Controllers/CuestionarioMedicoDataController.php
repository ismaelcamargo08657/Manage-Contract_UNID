<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;


class CuestionarioMedicoDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datosPeraona = DB::table("colaborador")
        ->select('colaborador.Nombre as nombreColaborador', 'Apellido_Paterno', 'Apellido_Materno', '   ' ,'Sexo',
                'complementos.CURP', 'RFC', 'colaborador.Telefono', 'Email', 'colaborador.Direccion', 'Colonia', 'colaborador.Estado',
                'colaborador.Municipio', 'Codigo_Postal', 'complementos.Salario', 'complementos.Puesto', 'complementos.Fecha_Ingreso',  'cedis.Nombre  as nombreCedis'
                )
        ->join('complementos', 'complementos.id_colaborador', 'colaborador.idColaborador')
        ->join('cedis','complementos.Zona','cedis.id')
        ->where('Email', Auth::user()->correo) //use of unknown class App\Http\Controllers\Auth;
        ->first();

        return view('contrats.cuestionario_medico',['data'=> $datosPeraona]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'idColaborador' => '', //******************************************* */
            'fechaNacimiento' => 'required|date',
            'estadoCivil' => 'required|string',
            'Peso' => 'required|numeric',
            'Fecha_ultimo_estudio_medico' => 'nullable|date',
            'altura' => 'required|numeric',
            'estado_salud' => 'required|string',
            'ultima_revision' => 'required|string',
            'ultima_revision_estudios_fecha' => '',
            'ultima_revision_estudios' => '',
            'compartir_resultados' => '',
            'enfermedad_cronica' => '',
            'especifique_enfermedad' => '',
            'dolores_musculares' => '',
            'parte_cuerpo_dolores' => '',
            'ultima_enfermedad' => '',
            'atencion_enfermedad' => '',
            'medicamentos_controlados' => '',
            'nombre_medicamento' => '',
            'tratamiento_medico' => '',
            'tipo_tratamiento' => '',
            'medicamento_antidepresivo' => '',
            'especificar_antidepresivos' => '',
            'operacion_ultimos_5' => '',
            'tipo_operacion' => '',
            'si_operacion_programada' => '',
            'operacion_programada' => '',
            'especificar_operacion_programada' => '',
            'higiene_bucal' => '',
            'frecuencia_dentista' => '',
            'tratamiento_bucal' => '',
            'especificar_tratamiento_bucal' => '',
            'embarazo' => '',
            'tiempo_gestacion' => '',
            'control_embarazo' => '',
            'frecuencia_consulta_embarazo' => '',
            'discapacidad' => '',
            'especificar_discapacidad' => '',
            'enfermedades_familiares' => '',
            'especificar_enfermedad_familiar' => '',
            'parentezco_familiar' => '',
            'familiar_viviendo' => '',
            'dependencia_economica' => '',
            'gastos_medicos_familiar' => '',
            'tratamiento_vigente' => '',
            'especifique_tratamiento' => '',
            'conoce_estupefacientes' => '',
            'tipo_estupefacientes' => '',
            'consumo_estupefacientes' => '',
            'tipo_consumo' => '',
            'test_antidoping' => '',
            'familia_consumo_estupefacientes' => '',
            'especificar_familia_consumo' => '',
            'consume_alcohol' => '',
            'frecuencia_alcohol' => '',
            'fuma' => '',
            'cuantas_veces_fuma' => '',
            'adiccion' => '',
            'tipo_adiccion' => '',
            'anexo' => '',
            'lugar_apoyo' => '',
            'vacuna_covid' => '',
            'n_vacuna_covid' => '',
            'certificado_covid' => '',
            'contacto_covid' => '',
            'prueba_covid' => '',
            'fallecimiento_covid' => '',
            'parentesco_covid' => '',
            'fiebre' => '',
            'tos' => '',
            'cansancio' => '',
            'garganta' => '',
            'cabeza' => '',
            'diarreicos' => '',
            'aire' => '',
            'gusto' => '',
            '' => '',
            '' => '',
            '' => '',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
