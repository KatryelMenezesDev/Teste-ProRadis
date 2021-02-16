<!-- Modal -->
<div id="modalPaciente" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="fas fa-user-plus"></i> Cadastro de Paciente</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome Completo: </label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="ex: Lucas Silva Santos">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sexo: </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                        Masculino
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                        Feminino
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Data de Nascimento: </label>
                                <input class="form-control" type="date" value="0000-00-00" id="example-date-input">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">CPF: </label>
                                <input type="text" class="form-control cpf" id="exampleInputEmail1" placeholder="xxx.xxx.xxx-xx" maxlength="14">
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </div>
</div>
