@extends('layout.template')
@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fas fa-users"></i> Pacientes</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <!-- Lista de Pacientes -->
                    <div class="col-md-12">
                        <table class="table table-bordered table-responsive-sm table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody id="PacienteLista">

                            </tbody>
                        </table>
                    </div>
                    <!-- Lista de Pacientes# -->
                </div>
                 <!-- Botão para add -->
                <div class="row">
                    <div align="center" class="col-md-12">
                        <a href="#" class="btn btn-primary btn-block" data-toggle="modal"
                            data-target="#modalPaciente"><i class="fas fa-plus"></i> Paciente</a>
                    </div>
                </div>
                 <!-- Botão para add# -->
            </div>
        </div>
        <!-- Lista de Atendidos -->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fas fa-check"></i> Atendidos</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-responsive-sm table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody id="ConsultaLista">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Lista de Atendidos# -->
    <!-- Prontuario -->
    <div class="col-md-9">
        <h1 align="center" id="title-paciente"><i class="fas fa-laptop-medical"></i> ATENDIMENTO A PACIENTE</h1>
        <hr>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="far fa-clipboard"></i> Dados da Consulta</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div  id="prontuario" data-tiny-editor>
                    </div>
                    <h5>Caracteres: <b id="caracteres">0/10000</b></h5>
                </div>
                <div id="btn-action">
                    <button type="button" id="btnConsulta" onclick="salvarConsulta()"
                        class="btn btn-block btn-primary"><i class="fas fa-save"></i> Salvar Consulta</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Prontuario# -->
</div>
@include('layout.modal')
@endsection
