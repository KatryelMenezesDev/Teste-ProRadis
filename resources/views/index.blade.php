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
                    <div class="col-md-12">
                        <table class="table table-bordered table-responsive table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mariazinha</td>
                                    <td><a href="#" class="btn btn-success btn-sm">Nova Consulta</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Pedrinho</td>
                                    <td><a href="#" class="btn btn-success btn-sm">Nova Consulta</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Chiquinho</td>
                                    <td><a href="#" class="btn btn-success btn-sm">Nova Consulta</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div align="center" class="col-md-12">
                        <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalPaciente"><i class="fas fa-plus"></i> Paciente</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fas fa-check"></i> Atendidos</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-responsive table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Luizinho</td>
                                    <td><a href="#" class="btn btn-success btn-sm">Ver Consulta</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Zezinho</td>
                                    <td><a href="#" class="btn btn-success btn-sm">Ver Consulta</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <h1 align="center"><i class="fas fa-user"></i> Paciente Mariazinha</h1>
        <hr>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="far fa-clipboard"></i> Dados da Consulta</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="17"></textarea>
                </div>
                <a href="#" class="btn btn-block btn-primary"><i class="fas fa-save"></i> Salvar Consulta</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@include('layout.modal')
@endsection
