<!-- Modal -->
<div id="modalPaciente" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="fas fa-user-plus"></i> Cadastro de Paciente</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome Completo: </label>
                                <input type="text" class="form-control" id="nome" placeholder="ex: Lucas Silva Santos" maxlength="10">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sexo: </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="sexo" value="M" checked="">
                                        Masculino
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="sexo" value="F">
                                        Feminino
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Data de Nascimento: </label>
                                <input class="form-control" type="date" id="nascimento">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">CPF: </label>
                                <input type="text" class="form-control cpf" id="cpf" placeholder="xxx.xxx.xxx-xx" maxlength="14">
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" onclick="criarPaciente()" data-dismiss="modal" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal# -->
