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
        funcao = "consultaRepresentatanteUser_id_pk";
        $.ajax({
            url: "../api/processa.php",
            method: 'GET',
            async: false,

            data: {
                'funcao': funcao,
                'user_id_pk': user_id_pk,
            },
            success: function (data) {
                data = JSON.parse(data);
                var nome = data.nome;
                var sobre_nome = data.sobre_nome;
                var telefone = data.telefone;
                var email = data.email;
                var user_id =data.user_id;
                $("#nome").val(nome);
                $("#sobrenome").val(sobre_nome);
                $("#telefone").val(telefone);
                $("#email").val(email);
                $("#user_id").val(user_id);
                console.log(user_id);
            },
            error: function (data) {
            }
        });
    }
});

