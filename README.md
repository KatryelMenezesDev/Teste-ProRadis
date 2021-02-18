<h1 align="center">✔ Teste ProRadis ✔</h1>

Neste Projeto utilizei o framework Laravel 8 rodando em um sevidor apache junto com Mysql. Não se preocupe, deixei um tutorial de como rodá-lo sem problemas no Getting Started. Para demais dúvidas, meu e-mail é katryel.dev@gmail.com.

Bem vindo!

## Getting Started
1. Tenha o Composer instalado

Obs.: Utilizei o Composer version 2.0.9

[Composer Download](https://getcomposer.org/download/)

2. Configure o arquivo “.env” do projeto, colocando as informações de acesso do banco de dados, esse arquivo está na pasta principal. 

<img src="https://i.imgur.com/RCz7hlw.png">

3. Execute as migrations com o comando “php artisan migrate” na pasta do projeto.
Certifique se os serviços de apache e de mysql estão ativos.
Assim que termina esse dois passo é só abrir “localhost” e testar o projeto.

<img src="https://i.imgur.com/nNVjbsT.png">

## Endpoints

API para cadastro de paciente
- POST  /api/paciente

Exemplo em JSON:
```
{
    "nome": "Lucas Santos Silva",
    "sexo": "M",
    "nascimento": "2000-02-02",
    "cpf": "407.968.888-99"
}
```
--------------------------------------------------------------------------------------
API para cadastro de consulta médica e seu conteúdo textual
- POST /api/consulta
--------------------------------------------------------------------------------------

API para consulta de prontuário
- GET /api/consulta/{id}
--------------------------------------------------------------------------------------

API para histórico de consultas médicas
- GET /api/consulta
--------------------------------------------------------------------------------------

API para exibir todos os  pacientes
- GET /api/paciente
--------------------------------------------------------------------------------------
API para consultar paciente especifico
- GET /api/paciente/{id}
--------------------------------------------------------------------------------------
API para atualização de prontuário
- PUT /api/consulta

Exemplo em JSON:
```
{
    "prontuario_id": "01",
    "prontuario": "Prontuário atualizado para esse texto."
}
```

### Que a força esteja com você!
