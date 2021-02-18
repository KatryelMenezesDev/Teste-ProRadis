setInterval(() => {
    validationMedicalRecord();
}, 100);


$(document).ready(function () {
    $('.cpf').mask('000.000.000-00', { reverse: true });
});

function validationMedicalRecord() {
    let characters = document.querySelector('#prontuario').innerText.length;
    if (characters > 10000) {
        document.querySelector('#prontuario').innerText = document.querySelector('#prontuario').innerText.substring(0, 10000);
    }
    else {
        document.querySelector('#caracteres').innerText = document.querySelector('#prontuario').innerText.length + "/10000";
    }
}
