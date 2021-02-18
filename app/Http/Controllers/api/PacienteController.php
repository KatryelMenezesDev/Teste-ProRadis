<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\api\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // Carrega lista de "Atendidos"
    {
        $pacientes = Paciente::where('consultas_id', null)->get();
        return json_encode($pacientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //Cadastra o Paciente no banco de dados.
    {
        $paciente = new Paciente;
        $paciente->nome = $request->input('nome');
        $paciente->sexo = $request->input('sexo');
        $paciente->nascimento = $request->input('nascimento');
        $paciente->cpf = $request->input('cpf');
        $paciente->save();
        return json_encode($paciente);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //Exibi um baciente especifico.
    {
        $paciente = Paciente::find($id);
        return json_encode($paciente);
    }
}
