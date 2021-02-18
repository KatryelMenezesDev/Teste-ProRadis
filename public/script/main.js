function carregarPacientes() {
    document.querySelector('#PacienteLista').innerText = null;
    $.getJSON('/api/paciente', function (Pacientes) {
        Pacientes.forEach(Paciente => {
            dados = `<tr> <td>${Paciente.nome}</td> <td><button type="button" onclick="novaConsulta(${Paciente.id})" class="btn btn-success btn-sm">Nova Consulta</button></td> </tr>`;
            $('#PacienteLista').append(dados);
        });
    })
}


function carregarAtentimentos() {
    document.querySelector('#ConsultaLista').innerText = null;
    $.getJSON('/api/consulta/', function (Paciente) {
        Paciente.forEach(Paciente => {
            dados = `<tr> <td>${Paciente.nome}</td> <td><button type="button" onclick="verConsulta(${Paciente.consultas_id})" class="btn btn-success btn-sm">Ver Consulta</a></td> </tr>`;
            $('#ConsultaLista').append(dados);
        });
    }
    )
}


function criarPaciente() {
    paciente = {

        nome: $('#nome').val(),
        sexo: $('input[name="sexo"]:checked').val(),
        nascimento: $('#nascimento').val(),
        cpf: $('#cpf').val()
    }

    $.post("/api/paciente", paciente, function (res) {
        msgSuccess('Paciente cadastrado com sucesso!')
        document.querySelector('#nome').value = '';
        document.querySelector('#nascimento').value = '';
        document.querySelector('#cpf').value = '';
        carregarPacientes();
        res = JSON.parse(res);
        novaConsulta(res.id)
    });

}

function novaConsulta(id) {
    $.getJSON('/api/paciente/' + id, function (res) {
        document.querySelector('#prontuario').innerHTML = '';
        document.querySelector('#title-paciente').innerHTML = '<i class="fas fa-user"></i> Paciente ' + res.nome;
        $('#btnConsulta').remove()
        $('#btn-action').append(`<button type="button" id="btnConsulta" onclick="salvarConsulta(${id})" class="btn btn-block btn-primary"><i class="fas fa-save"></i> Salvar Consulta</button>`)
    });

}

function verConsulta(id) {
    $.getJSON('/api/consulta/' + id, function (res) {
        document.querySelector('#title-paciente').innerHTML = '<i class="fas fa-user"></i> Paciente ' + res.nome;
        document.querySelector('#prontuario').innerHTML = res.prontuario;
        $('#btnConsulta').remove()
        $('#btn-action').append(`<button type="button" id="btnConsulta" onclick="atualizarConsulta(${id})" class="btn btn-block btn-primary"><i class="fas fa-save"></i> Atualizar Consulta</button>`)
    })
}

function salvarConsulta(id) {
    prontuario = {
        paciente: id,
        prontuario: document.querySelector('#prontuario').innerHTML
    }

    $.post('api/consulta', prontuario, function () {
        msgSuccess('Prontuário realizado com sucesso!')
        carregarPacientes();
        carregarAtentimentos()
    }
    )
}
function atualizarConsulta(id) {
    prontuario = {
        prontuario_id: id,
        prontuario: document.querySelector('#prontuario').innerHTML
    }

    $.ajax(
        {
            url: '/api/consulta',
            type: 'PUT',
            data: prontuario,
            success: function () {
                msgSuccess('Prontuário atualizado com sucesso!')
            }
        }
    )

}

$(function () {
    carregarPacientes();
    carregarAtentimentos();

})


function msgSuccess(text)
{
    Swal.fire({
        icon: 'success',
        title: text,
        showConfirmButton: false,
        timer: 2000
    })
}
