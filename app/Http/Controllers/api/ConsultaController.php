<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\api\Consulta;
use App\Models\api\Paciente;
use Illuminate\Support\Facades\DB;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $pacientes =  Paciente::where('consultas_id','<>',null)->get();
       return json_encode($pacientes);
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
        $prontuario = new Consulta;
        $prontuario->prontuario = $request->prontuario;
        $prontuario->save();

        $paciente = Paciente::find($request->paciente);
        $paciente->consultas_id = $prontuario->id;
        $paciente->save();

        return json_encode($paciente);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Consulta = DB::table('consultas')
        ->join('pacientes', 'consultas.id', '=', 'pacientes.consultas_id')
        ->where('pacientes.consultas_id', '=', $id)
        ->select('pacientes.nome','pacientes.nascimento','pacientes.cpf','pacientes.sexo','consultas.prontuario')
        ->get();
        return json_encode($Consulta[0]);
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
    public function update(Request $request)
    {
        Consulta::where('id',$request->prontuario_id)->update(['prontuario'=>$request->prontuario]);
        return json_encode(Consulta::find($request->prontuario_id));
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
