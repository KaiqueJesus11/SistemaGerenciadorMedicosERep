function alterarMedico(nome, sobre_nome, crm, telefone, email, endereco, visitado, especialidade, user_id_pk, cod_medicamento_fk, cod_representante_fk, estado) {
    funcao = "alterarMedico";

    $.ajax({
        url: "../api/processa.php",
        method: 'PUT',
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
            'user_id_pk': user_id_pk,
            'cod_medicamento_fk': cod_medicamento_fk,
            'cod_representante_fk': cod_representante_fk,
            'estado': estado
        },
        success: function (data) {
            alert("Medico atualizado!");
            console.log(data)
        },
        error: function (data) {
            alert("Medico nao atualizado!");
            console.log(data)
        }
    });
}

$(document).ready(function () {
    //////////////////////////////////////////////////////////Alterar
    // função pra ler querystring
    function queryString(parameter) {
        var loc = location.search.substring(1, location.search.length);
        var param_value = false;
        var params = loc.split("&");
        for (i = 0; i < params.length; i++) {
            param_name = params[i].substring(0, params[i].indexOf('='));
            if (param_name == parameter) {
                param_value = params[i].substring(params[i].indexOf('=') + 1)
            }
        }
        if (param_value) {
            return param_value;
        }
        else {
            return undefined;
        }
    }

    var variavel = queryString("user_id");
    carregar(variavel);
    function carregar(user_id_pk) {
        funcao = "consultaMedicoUser_id_pk";
        $.ajax({
            url: "../api/processa.php",
            method: 'GET',
            async: false,

            data: {
                'funcao': funcao,
                'user_id_pk': user_id_pk,
            },
            success: function (data) {
                console.log(data);
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

                $("#nome").val(nome);
                $("#sobrenome").val(sobre_nome);
                $("#crm").val(crm);
                $("#estado").val(estado);
                $("#telefone").val(telefone);
                $("#email").val(email);
                $("#visitado").val(visitado);
                $("#endereco").val(endereco);
                $("#especialidade").val(especialidade);
                $("#user_id_pk").val(user_id);
                $("#cod_representante").val(cod_representante);
                $("#cod_medicamento").val(cod_medicamentos);
                console.log(data);

            },
            error: function (data) {
            }
        });
    }

    $("#salvar").click(function () {
        nome = $("#nome").val();
        sobrenome = $("#sobrenome").val();
        crm = $("#crm").val();
        estado = $("#estado").val();
        telefone = $("#telefone").val();
        email = $("#email").val();
        visitado = $("#visitado").val();
        endereco = $("#endereco").val();
        especialidade = $("#especialidade").val();
        user_id_pk = $("#user_id_pk").val();
        cod_representante = $("#cod_representante").val();
        cod_medicamento = $("#cod_medicamento").val();
        alterarMedico(nome, sobrenome, crm, telefone, email, endereco, visitado, especialidade, user_id_pk, cod_medicamento, cod_representante, estado);
        window.location.href = "consultar.html";
    });
});

