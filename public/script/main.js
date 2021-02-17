function carregarPacientes() {
    document.querySelector('#PacienteLista').innerText = null;
    $.getJSON('/api/paciente', function (Pacientes) {
        Pacientes.forEach(Paciente => {
            dados = `<tr> <td>${Paciente.name}</td> <td><button type="button" onclick="novaConsulta(${Paciente.id})" class="btn btn-success btn-sm">Nova Consulta</button></td> </tr>`;
            $('#PacienteLista').append(dados);
        });
     })}

function criarPaciente()
{
    paciente = {

        name: $('#nome').val(),
        sexo: $('input[name="sexo"]:checked').val(),
        nascimento: $('#nascimento').val(),
        cpf: $('#cpf').val()
    }

    $.post("/api/paciente", paciente, function(res) {
        Swal.fire({
            icon: 'success',
            title: 'Paciente cadastrado com sucesso!',
            showConfirmButton: false,
            timer: 3000
          })
        document.querySelector('#nome').value = '';
        document.querySelector('#nascimento').value = '';
        document.querySelector('#cpf').value = '';
        carregarPacientes();
        novaConsulta(res);
    });

}

function novaConsulta($id)
{
    $.getJSON('/api/paciente/'+$id, function(res)
    {
        document.querySelector('#title-paciente').innerHTML = '<i class="fas fa-user"></i> Paciente '+res.name;
        $('#btnConsulta').remove()
        $('#btn-action').append(`<button type="button" id="btnConsulta" onclick="salvarConsulta(${$id})" class="btn btn-block btn-primary"><i class="fas fa-save"></i> Salvar Consulta</button>`)
    });

}

function salvarConsulta($id)
{

}

$(function()
{
    carregarPacientes();
})


$(document).ready(function () {
    $('.cpf').mask('000.000.000-00', { reverse: true });
});
