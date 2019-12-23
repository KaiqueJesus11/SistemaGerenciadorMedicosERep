function consultaMedico(crm, estado) {
    funcao = "consultaMedico";

    $.ajax({
        url: "../api/processa.php",
        method: 'GET',
        async: false,

        data: {
            'funcao': funcao,
            'crm': crm,
            'estado': estado,

        },
        success: function (data) {
            data = JSON.parse(data);
            var nome = data.nome;
            var sobre_nome = data.sobre_nome;
            var crm = data.crm;
            var estado = data.estado;
            var telefone = data.telefone;
            var endereco = data.endereco;
            var email = data.email;
            var visitado = data.visitado;
            var especialidade = data.especialidade;
            var user_id = data.user_id;
            var cod_medicamentos = data.cod_medicamentos;
            var cod_representante = data.cod_representante;

            var resposta = data.resposta;
            var mensagem = (
                "Id do medico: " + user_id + "<br>" +
                "Nome: " + nome + " " + sobre_nome + "<br>" +
                "CRM: " + crm + "<br>" +
                "Estado: " + estado + "<br>" +
                "Especialidade: " + especialidade + "<br>" +
                "Telefone: " + telefone + "<br>" +
                "Endereco: " + endereco + "<br>" +
                "E-mail: " + email + "<br>" +
                "Esse medico é visitado?: " + visitado + "<br>" +
                "Id do representante: " + cod_representante + "<br>" +
                "Id dos medicamentos solicitados: " + cod_medicamentos + "<br>");
            var mensagemNegativa = (resposta);
            if (resposta == undefined) {
                $("#resposta").html(mensagem);
                document.getElementById("alterar").style.visibility = "visible";
            }
            else {
                $("#resposta").html(mensagemNegativa);
            }
        },
        error: function (data) {
            console.log(data)
        }
    });
}


function consultaMedicosDoRep(cod_representante) {
    funcao = "consultaMedicosDoRep";

    $.ajax({
        url: "../api/processa.php",
        method: 'GET',
        async: false,

        data: {
            'funcao': funcao,
            'cod_representante_fk': cod_representante,
        },
        success: function (data) {
            data = JSON.parse(data);
            console.log(data)
            var nome = data[0].nome;
            var sobre_nome = data[0].sobre_nome;
            var crm = data[0].crm;
            var estado = data[0].estado;
            var telefone = data[0].telefone;
            var endereco = data[0].endereco;
            var email = data[0].email;
            var visitado = data[0].visitado;
            var especialidade = data[0].especialidade;
            var user_id = data[0].user_id;
            var cod_medicamentos = data[0].cod_medicamentos;
            var cod_representante = data[0].cod_representante;

            var resposta = data.resposta;
            var mensagem = (
                "Id do medico: " + user_id + "<br>" +
                "Nome: " + nome + " " + sobre_nome + "<br>" +
                "CRM: " + crm + "<br>" +
                "Estado: " + estado + "<br>" +
                "Especialidade: " + especialidade + "<br>" +
                "Telefone: " + telefone + "<br>" +
                "Endereco: " + endereco + "<br>" +
                "E-mail: " + email + "<br>" +
                "Esse medico é visitado?: " + visitado + "<br>" +
                "Id do representante: " + cod_representante + "<br>" +
                "Id dos medicamentos solicitados: " + cod_medicamentos + "<br>");
            var mensagemNegativa = (resposta);
            if (resposta == undefined) {
                $("#resposta").html(mensagem);
                document.getElementById("alterar").style.visibility = "visible";
            }
            else {
                $("#resposta").html(mensagemNegativa);
            }
        },
        error: function (data) {
            console.log(data)
        }
    });
}


function consultaVisita_Video(session_id) {
    funcao = "consultaVisita_Video";

    $.ajax({
        url: "../api/processa.php",
        method: 'GET',
        async: false,

        data: {
            'funcao': funcao,
            'session_id': session_id,
        },
        success: function (data) {
            data = JSON.parse(data);
            var session_id = data[0].session_id;
            var dataHora = data[0].data;
            var estado_timeline = data[0].estado_timeline;
            var interacao_id = data[0].interacao_id;
            var localidade = data[0].localidade;
            var qtd_visita = data[0].qtd_visita;
            var ultima_cena = data[0].ultima_cena;
            var user_id = data[0].user_id;
            var nome_interacao = data[1].nome_interacao;
            var interacao = data[1].interacao;
            var nome = data[2].nome;
            var sobre_nome = data[2].sobre_nome;
            var estado = data[2].estado;
            var crm = data[2].crm;
            var email = data[2].email;

            var resposta = data.resposta;
            var mensagem = (
                "<hr>"+
                "Informações do médico:" + "<br>" +
                "Id do médico: " + user_id + "<br>" +
                "Nome do médico: " + nome + " " + sobre_nome + "<br>" +
                "CRM: " + crm + "<br>" +
                "Estado: " + estado + "<br>" +
                "Email: " + email + "<br>" + "<hr>"+ 
                "Informações da visita:" + "<br>" +
                "Session_id: " + session_id + "<br>" +
                "Data: " + dataHora + "<br>" +
                "Localidade: " + localidade + "<br>" +
                "Quantidade de visitas desse usuario: " + qtd_visita + "<br>" +
                "Ultima cena vista: " + ultima_cena + "<br>" +
                "Estado da timeline: " + estado_timeline + "<br>" + "<hr>"+
                "Informações das interações:" + "<br>" +
                "Id das interações: " + interacao_id + "<br>"+
                "Nome da ultima interação: " + nome_interacao + "<br>" +
                "Interação obtida: " + interacao + "<br>");
            var mensagemNegativa = (resposta);
            if (resposta == undefined) {
                $("#resposta").html(mensagem);
            }
            else {
                $("#resposta").html(mensagemNegativa);
            }
        },
        error: function (data) {
            console.log(data)
        }
    });
}


function vincularMedRep(cod_representante, user_id_pk){
    funcao = "vincularMedRep";
    $.ajax({
        url: "../api/processa.php",
        method: 'POST',
        async: false,
        data: {
            'funcao': funcao,
            'cod_representante_fk': cod_representante,
            'user_id_pk': user_id_pk,
        },
        success: function (data) {
            console.log(data)
        },
        error: function (data) {
            console.log(data)
        }
    });
}


function consultaRepDoMedico(to_user_id_pk) {
    funcao = "consultaRepDoMedico";

    $.ajax({
        url: "../api/processa.php",
        method: 'GET',
        async: false,

        data: {
            'funcao': funcao,
            'user_id_pk': to_user_id_pk,
        },
        success: function (data) {
            data = JSON.parse(data);
            console.log(data)
            var tamanho = (data.length) - 1;
            if(tamanho < 0){
                tamanho = 0;
            }
            var nome = data.nome;
            var nome = data.nome;
            var sobre_nome = data.sobre_nome;
            var telefone = data.telefone;
            var email = data.email;
            var registros = data.registro;
            var nome_foto = data.nome_foto;
            var resposta = data.resposta;
            var mensagem = (
                "Registros encontrados: " + registros + "<br>" +
                "Nome: " + nome + " " + sobre_nome + "<br>" +
                "Telefone: " + telefone + "<br>" +
                email + "<br>");
            var foto = nome_foto;
            var mensagemNegativa = (resposta);
            if (resposta == undefined) {
                $("#resposta").html(mensagem);
                document.getElementById("foto").style.visibility = "visible";
                var img = document.getElementById('img');
                img.src = "../arquivos/" + nome_foto;
                document.getElementById("alterarRepresentante").style.visibility = "visible";
            }
            else {
                document.getElementById("resposta").classList.remove("col-6");
                $("#resposta").html(mensagemNegativa);
            }
        },
        error: function (data) {
            console.log(data)
        }
    });
}





function consultaRepresentante(nome) {
    funcao = "consultaRepresentante";

    $.ajax({
        url: "../api/processa.php",
        method: 'GET',
        async: false,

        data: {
            'funcao': funcao,
            'nome': nome,
        },
        success: function (data) {
            data = JSON.parse(data);
            var tamanho = (data.length) - 1;
            var nome = data[tamanho].nome;
            var sobre_nome = data[tamanho].sobre_nome;
            var telefone = data[tamanho].telefone;
            var email = data[tamanho].email;
            var registros = data[tamanho].registro;
            var nome_foto = data[tamanho].nome_foto;
            var resposta = data[tamanho].resposta;
            var mensagem = (
                "Registros encontrados: " + registros + "<br>" +
                "Nome: " + nome + " " + sobre_nome + "<br>" +
                "Telefone: " + telefone + "<br>" +
                email + "<br>");
            var foto = nome_foto;
            var mensagemNegativa = (resposta);
            if (resposta == undefined) {
                $("#resposta").html(mensagem);
                document.getElementById("foto").style.visibility = "visible";
                var img = document.getElementById('img');
                img.src = "../arquivos/" + nome_foto;
                document.getElementById("alterarRepresentante").style.visibility = "visible";
            }
            else {
                document.getElementById("resposta").classList.remove("col-6");
                $("#resposta").html(mensagemNegativa);
            }
        },
        error: function (data) {
            console.log(data)
        }
    });
}

function gerarLink(crm, estado) {
    funcao = "consultaMedico";

    $.ajax({
        url: "../api/processa.php",
        method: 'GET',
        async: false,

        data: {
            'funcao': funcao,
            'crm': crm,
            'estado': estado,

        },
        success: function (data) {
            data = JSON.parse(data)
            var saudacao = data.saudacao;
            var texto = data.texto;
            var link = '<a href="' + data.link + '">dsvideo.com.br</a>';
            var resposta = data.resposta;
            var mensagem = (saudacao + "<br>" + texto + "<br>" + link);
            var mensagemNegativa = (resposta);
            if (resposta == undefined) {
                $("#resposta").html(mensagem);
            }
            else {
                $("#resposta").html(mensagemNegativa);
            }
        },
        error: function (data) {
            console.log(data)
        }
    });
}

function cadastrarMedico(nome, sobre_nome, crm, telefone, email, endereco, visitado, especialidade, user_id_pk, cod_medicamento_fk, estado) {
    funcao = "cadastrarMedico";

    $.ajax({
        url: "../api/processa.php",
        method: 'POST',
        async: false,

        data: {
            'funcao': funcao,
            'nome': nome,
            'sobre_nome': sobre_nome,
            'crm': crm,
            'telefone': telefone,
            'email': email,
            'endereco': endereco,
            'visitado': visitado,
            'especialidade': especialidade,
            'user_id_pk': user_id_pk,
            'cod_medicamento_fk': cod_medicamento_fk,
            'estado': estado
        },
        success: function (data) {
            console.log(data)
        },
        error: function (data) {
            console.log(data)
        }
    });

}

function cadastrarRepresentante(nome, sobre_nome, email, telefone, foto) {
    funcao = "cadastrarRepresentante";
    $.ajax({
        url: "../api/processa.php",
        method: 'POST',
        async: false,

        data: {
            'funcao': funcao,
            'nome': nome,
            'sobre_nome': sobre_nome,
            'telefone': telefone,
            'email': email,
            'foto': foto
        },
        success: function (data) {
            console.log("success Rep")
            console.log(data);
        },
        error: function (data) {
            console.log("error")
            console.log(data);
        }
    });

}


function cadastrarMedicamento(cod_medicamento_fk) {
    funcao = "cadastrarMedicamento";
    $.ajax({
        url: "../api/processa.php",
        method: 'POST',
        async: false,

        data: {
            'funcao': funcao,
            'cod_medicamento_fk': cod_medicamento_fk,
        },
        success: function (data) {
            console.log(data)
        },
        error: function (data) {
            console.log(data)
        }
    });

}



$(document).ready(function () {
    //////////////////////////////////////////////////////////Botão alterar
    $("#alterar").click(function () {
        crm = $("#inputCRM").val();
        estado = $("#inputEstado").val();
        funcao = "consultaMedico";

        $.ajax({
            url: "processa.php",
            method: 'POST',
            async: false,

            data: {
                'funcao': funcao,
                'crm': crm,
                'estado': estado,

            },
            success: function (data) {
                data = JSON.parse(data);
                var user_id = data.user_id;
                var passaValor = function (valor) {
                    window.location = "../medico/editar.html?user_id=" + valor;
                }
                var user_id_ = user_id;
                passaValor(user_id_);

            },
            error: function (data) {
                console.log(data)
            }
        });
    });

    //////////////////////////////////////////////////////////Botão Alterar Representante
    $("#alterarRepresentante").click(function () {
        $.ajax({
            url: "../api/processa.php",
            method: 'GET',
            async: false,

            data: {
                'funcao': funcao,
                'nome': nome,
            },
            success: function (data) {
                data = JSON.parse(data);
                var user_id = data[0].user_id;
                var passaValor = function (valor) {
                    window.location = "../representante/editarRepresentante.html?user_id=" + valor;
                }
                var user_id_ = user_id;
                passaValor(user_id_);

            },
            error: function (data) {
                console.log(data)
            }
        });
    });


    //////////////////////////////////////////////////////////Consultar
    $("#consultar").click(function () {
        crm = $("#inputCRM").val();
        estado = $("#inputEstado").val();
        consultaMedico(crm, estado);
    });


    //////////////////////////////////////////////////////////Gerar Link
    $("#gerarLink").click(function () {
        crm = $("#inputCRM").val();
        estado = $("#inputEstado").val();
        gerarLink(crm, estado);
    });

    //////////////////////////////////////////////////////////Cadastrar medico
    $("#cadastrar").click(function () {
        nome = $("#nome").val();
        sobrenome = $("#sobrenome").val();
        crm = $("#crm").val();
        estado = $("#estado").val();
        telefone = $("#telefone").val();
        email = $("#email").val();
        visitado = $("#visitado").val();
        endereco = $("#endereco").val();
        especialidade = $("#especialidade").val();
        cod_representante = $("#cod_representante").val();
        user_id_pk = crm + estado;
        cod_medicamento = crm + estado;
        cadastrarMedico(nome, sobrenome, crm, telefone, email, endereco, visitado, especialidade, user_id_pk, cod_medicamento, estado);
        cadastrarMedicamento(user_id_pk);
        vincularMedRep(cod_representante, user_id_pk);
    });

    //////////////////////////////////////////////////////////Consultar Representante
    $("#consultarRep").click(function () {
        nome = $("#nome").val();
        consultaRepresentante(nome);
    });

    $("#consultarVisita").click(function () {
        id_visita = $("#id_visita").val();
        consultaVisita_Video(id_visita);
    });

    //////////////////////////////////////////////////////////Consultar Medicos de um Representante
    $("#consultarMedRep").click(function () {
        cod_representante = $("#cod_representante").val();
        consultaMedicosDoRep(cod_representante);
    });

    //////////////////////////////////////////////////////////Consultar Medicos de um Representante
    $("#consultarRepMed").click(function () {
        to_user_id_pk = $("#to_user_id_pk").val();
        consultaRepDoMedico(to_user_id_pk);
    });
});
