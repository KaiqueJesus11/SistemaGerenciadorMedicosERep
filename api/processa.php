<?php
include_once("conexao.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to_function = $_POST['funcao'];
    $to_user_id_pk = $_POST['user_id_pk'];
    $to_nome = $_POST['nome'];
    $to_sobre_nome = $_POST['sobre_nome'];
    $to_crm = $_POST['crm'];
    $to_telefone = $_POST['telefone'];
    $to_email = $_POST['email'];
    $to_ederenco = $_POST['endereco'];
    $to_especialidade = $_POST['especialidade'];
    $to_cod_medicamento = $_POST['cod_medicamento_fk'];
    $to_cod_representante = $_POST['cod_representante_fk'];
    $to_estado = $_POST['estado'];
    $to_visitado = $_POST['visitado'];
    $to_foto = $_POST['foto'];
    $to_session_id = $_POST['session_id'];
    $to_ultima_cena_visita = $_POST['ultima_cena_visita'];
    $to_dataVisita = $_POST['dataVisita'];
    $to_localidade = $_POST['localidade'];
    $to_qtd_visita = $_POST['qtd_visita'];
    $to_interacao_id = $_POST['interacao_id'];
    $to_estado_timeline = $_POST['estado_timeline'];
    $to_interacao_id = $_POST['interacao_id'];
    $to_nome_interacao = $_POST['nome_interacao'];
    $to_interacao = $_POST['interacao'];

}else if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $to_function = $_GET['funcao'];
    $to_user_id_pk = $_GET['user_id_pk'];
    $to_nome = $_GET['nome'];
    $to_sobre_nome = $_GET['sobre_nome'];
    $to_crm = $_GET['crm'];
    $to_telefone = $_GET['telefone'];
    $to_email = $_GET['email'];
    $to_ederenco = $_GET['endereco'];
    $to_especialidade = $_GET['especialidade'];
    $to_cod_medicamento = $_GET['cod_medicamento_fk'];
    $to_cod_representante = $_GET['cod_representante_fk'];
    $to_estado = $_GET['estado'];
    $to_visitado = $_GET['visitado'];
    $to_foto = $_GET['foto'];
    $to_session_id = $_GET['session_id'];
    $to_ultima_cena_visita = $_GET['ultima_cena_visita'];
    $to_dataVisita = $_GET['dataVisita'];
    $to_localidade = $_GET['localidade'];
    $to_qtd_visita = $_GET['qtd_visita'];
    $to_interacao_id = $_GET['interacao_id'];
    $to_estado_timeline = $_GET['estado_timeline'];
    $to_interacao_id = $_GET['interacao_id'];
    $to_nome_interacao = $_GET['nome_interacao'];
    $to_interacao = $_GET['interacao'];
}else{
    $to_function = $_PUT['funcao'];
    $to_user_id_pk = $_PUT['user_id_pk'];
    $to_nome = $_PUT['nome'];
    $to_sobre_nome = $_PUT['sobre_nome'];
    $to_crm = $_PUT['crm'];
    $to_telefone = $_PUT['telefone'];
    $to_email = $_PUT['email'];
    $to_ederenco = $_PUT['endereco'];
    $to_especialidade = $_PUT['especialidade'];
    $to_cod_medicamento = $_PUT['cod_medicamento_fk'];
    $to_cod_representante = $_PUT['cod_representante_fk'];
    $to_estado = $_PUT['estado'];
    $to_visitado = $_PUT['visitado'];
    $to_foto = $_PUT['foto'];
    $to_session_id = $_PUT['session_id'];
    $to_ultima_cena_visita = $_PUT['ultima_cena_visita'];
    $to_dataVisita = $_PUT['dataVisita'];
    $to_localidade = $_PUT['localidade'];
    $to_qtd_visita = $_PUT['qtd_visita'];
    $to_interacao_id = $_PUT['interacao_id'];
    $to_estado_timeline = $_PUT['estado_timeline'];
    $to_interacao_id = $_PUT['interacao_id'];
    $to_nome_interacao = $_PUT['nome_interacao'];
    $to_interacao = $_PUT['interacao'];
}


  if ($to_function ==  "alterarMedico"){
    $sql = "update medico SET nome='$to_nome', sobre_nome = '$to_sobre_nome', crm = '$to_crm', telefone = '$to_telefone', email ='$to_email', endereco = '$to_ederenco', visitado= '$to_visitado', especialidade = '$to_especialidade' where user_id_pk = '$to_user_id_pk'";
    $salvar = mysqli_query($conexao, $sql);
    $linhas = mysqli_affected_rows($conexao);
    mysqli_close($conexao);
    }          
            
  if ($to_function ==  "vincularMedRep"){
        $sql = "insert into listaRepMed (codRepresentante_fk, to_user_id_pk) values ('$to_cod_representante', '$to_user_id_pk')";
        $salvar = mysqli_query($conexao, $sql);
        $linhas = mysqli_affected_rows($conexao);
        mysqli_close($conexao);  
    }

    if ($to_function ==  "cadastrarMedico"){
        $sql = "insert into medico (nome, sobre_nome, crm, telefone, email, endereco, visitado, especialidade, user_id_pk, cod_medicamento_fk, estado) values ('$to_nome', '$to_sobre_nome', '$to_crm', '$to_telefone', '$to_email', '$to_ederenco', '$to_visitado', '$to_especialidade', '$to_user_id_pk', '$to_cod_medicamento', '$to_estado')";
        $salvar = mysqli_query($conexao, $sql);
        $linhas = mysqli_affected_rows($conexao);
        mysqli_close($conexao);  
    }

    if ($to_function ==  "cadastrarVisita"){
        $sql = "insert into visita_video (session_id_pk, ultima_cena_visita, user_id_fk, dataVisita, localidade, qtd_visita, interacao_id_fk, estado_timeline) values ('$to_session_id ', '$to_ultima_cena_visita', '$to_user_id_pk', '$to_dataVisita', '$to_localidade', '$to_qtd_visita', '$to_interacao_id', '$to_estado_timeline')";
        $salvar = mysqli_query($conexao, $sql);
        $linhas = mysqli_affected_rows($conexao);
        mysqli_close($conexao);  
    }

    if ($to_function ==  "cadastrarInteracao"){
        $sql = "insert into interacoes (interacao_id_pk, interacao) values ('$to_interacao_id', '$to_nome_interacao', '$to_interacao')";
        $salvar = mysqli_query($conexao, $sql);
        $linhas = mysqli_affected_rows($conexao);
        mysqli_close($conexao);  
    }

  if ($to_function ==  "cadastrarMedicamento"){
        $sql = "insert into medicamentos (cod_medicamento_pk, avamys, relvar, relvar_ellipta) values ('$to_cod_medicamento', '0', '0', '0')";        
        $salvar = mysqli_query($conexao, $sql);
        $linhas = mysqli_affected_rows($conexao);
        mysqli_close($conexao);    
    }
if($to_function ==  "consultaMedico"){
       $sql = "select * from medico where crm = '$to_crm' and estado = '$to_estado'";
    $consulta = mysqli_query($conexao, $sql);
    $registros = mysqli_num_rows($consulta);

    if($registros >= 1){
        while($exibirRegistros = mysqli_fetch_array($consulta)){
            $nome = $exibirRegistros[0];
            $nome = ucwords(strtolower($nome)); 
            $sobre_nome = $exibirRegistros[1];
            $sobre_nome = ucwords(strtolower($sobre_nome)); 
            $crm = $exibirRegistros[2];
            $estado = $exibirRegistros[11];
            $telefone = $exibirRegistros[3];
            $endereco = $exibirRegistros[5];
            $email = $exibirRegistros[4];
            $visitado = $exibirRegistros[6];
            $especialidade = $exibirRegistros[7];
            $user_id = $exibirRegistros[8];
            $cod_medicamentos = $exibirRegistros[9];
            $cod_representante = $exibirRegistros[10];
            $URL = "https://dsvideo.com.br/?uid=$exibirRegistros[8]";
            $array = array("saudacao" => "Ola, $nome!", "texto" => "Clique no link abaixo para acessar o conteudo:", "link" => "$URL", "nome" => "$nome", "sobre_nome" => "$sobre_nome", "crm" => "$crm", "estado" => "$estado", "telefone" => "$telefone", "endereco" => "$endereco", "email" => "$email", "visitado" => "$visitado", "user_id" => "$user_id", "cod_medicamentos" => "$cod_medicamentos", "cod_representante" => "$cod_representante");
            $dadosTratados = json_encode($array);
            print $dadosTratados;
            }
        }else{
            $array = array("resposta" => "CRM incorreto, digite novamente.");
            $dadosTratados = json_encode($array);
            print $dadosTratados;
        }
                mysqli_close($conexao);
}

if($to_function ==  "consultaMedicosDoRep"){
    $sql = "select * from listaRepMed where codRepresentante_fk = '$to_cod_representante'";
    $consulta = mysqli_query($conexao, $sql);
    $registros = mysqli_num_rows($consulta);
    $array = array();
   
    if($registros >= 1){
        while($exibirRegistros = mysqli_fetch_array($consulta)){
            $to_user_id_pk = $exibirRegistros[2];
            $sql2 = "select * FROM medico where user_id_pk = '$to_user_id_pk'";
            $consulta2 = mysqli_query($conexao, $sql2);
            $registros2 = mysqli_num_rows($consulta2);
   
            if($registros2 >= 1){
               while($exibirRegistros2 = mysqli_fetch_array($consulta2)){
                $nome = $exibirRegistros2[0];
                $nome = ucwords(strtolower($nome)); 
                $sobre_nome = $exibirRegistros2[1];
                $sobre_nome = ucwords(strtolower($sobre_nome)); 
                $crm = $exibirRegistros2[2];
                $estado = $exibirRegistros2[10];
                $telefone = $exibirRegistros2[3];
                $endereco = $exibirRegistros2[5];
                $email = $exibirRegistros2[4];
                $visitado = $exibirRegistros2[6];
                $especialidade = $exibirRegistros2[7];
                $user_id = $exibirRegistros2[8];
                $cod_medicamentos = $exibirRegistros2[9];
                $cod_representante = $exibirRegistros2[10];
                $URL = "https://dsvideo.com.br/?uid=$exibirRegistros2[8]";
                      array_push ($array, array("nome" => "$nome", "sobre_nome" => "$sobre_nome", "crm" => "$crm", "estado" => "$estado", "telefone" => "$telefone", "endereco" => "$endereco", "email" => "$email", "visitado" => "$visitado", "user_id" => "$user_id", "cod_medicamentos" => "$cod_medicamentos", "cod_representante" => "$cod_representante"));
                   }
               }else{
                   $array = array("resposta" => "User Id nao encontrado.$to_user_id_pk" );
               }
           }
        }else{
           $array = array("resposta" => "Codigo de representante incorreto ou não possui medicos vinculados, digite novamente.");
        }
        $dadosTratados = json_encode($array);
        print $dadosTratados;
        mysqli_close($conexao);
   }

   

   if($to_function ==  "consultaVisita_Video"){
    $sql = "select * from visita_video where session_id_pk = '$to_session_id'";
    $consulta = mysqli_query($conexao, $sql);
    $registros = mysqli_num_rows($consulta);
    $array = array();

 if($registros >= 1){
     while($exibirRegistros = mysqli_fetch_array($consulta)){
            $session_id = $exibirRegistros[0];
            $ultima_cena = $exibirRegistros[1];
            $user_id = $exibirRegistros[2];
            $data = $exibirRegistros[3];
            $localidade = $exibirRegistros[4];
            $qtd_visita = $exibirRegistros[5];
            $interacao_id = $exibirRegistros[6];
            $estado_timeline = $exibirRegistros[7];
            array_push ($array, array("session_id" => "$session_id", "ultima_cena" => "$ultima_cena", "user_id" => "$user_id", "data" => "$data", "localidade" => "$localidade", "qtd_visita" => "$qtd_visita", "interacao_id" => "$interacao_id", "estado_timeline" => "$estado_timeline"));
           
            $sql2 = "select * FROM interacoes where interacao_id_pk = '$interacao_id'";
            $consulta2 = mysqli_query($conexao, $sql2);
            $registros2 = mysqli_num_rows($consulta2);
            
            $sql3 = "select * FROM medico where user_id_pk = '$user_id'";
            $consulta3 = mysqli_query($conexao, $sql3);
            $registros3 = mysqli_num_rows($consulta3);

            if($registros2 >= 1){
                while($exibirRegistros2 = mysqli_fetch_array($consulta2)){
                    $nome_interacao = $exibirRegistros2[1];
                    $interacao = $exibirRegistros2[2];
                    array_push ($array, array("nome_interacao" => "$nome_interacao", "interacao" => "$interacao"));
                }
            }
            else{
                 $array = array("resposta" => "Interação nao encontrada.$interacao_id" );
            }

            if($registros3 >= 1){
                while($exibirRegistros3 = mysqli_fetch_array($consulta3)){
                    $nome = $exibirRegistros3[0];
                    $nome = ucwords(strtolower($nome)); 
                    $sobre_nome = $exibirRegistros3[1];
                    $sobre_nome = ucwords(strtolower($sobre_nome)); 
                    $crm = $exibirRegistros3[2];
                    $estado = $exibirRegistros3[10];
                    $email = $exibirRegistros3[4];                  
                    array_push ($array, array("nome" => "$nome", "sobre_nome" => "$sobre_nome", "crm" => "$crm", "estado" => "$estado", "email" => "$email"));
                }
            }
            else{
                 $array = array("resposta" => "User Id nao encontrado.$to_user_id_pk" );
            }
        }
    }
else{
    $array = array("resposta" => "Visita não encontrada.");
}
$dadosTratados = json_encode($array);
print $dadosTratados;
mysqli_close($conexao);
}


if($to_function ==  "consultaRepDoMedico"){
    $sql = "select * from listaRepMed where codMedico_fk = '$to_user_id_pk'";
    $consulta = mysqli_query($conexao, $sql);
    $registros = mysqli_num_rows($consulta);
    $array = array();
   
    if($registros >= 1){
        while($exibirRegistros = mysqli_fetch_array($consulta)){
            $to_cod_representante = $exibirRegistros[1];
            $sql2 = "select * from representante where cod_representante_pk = '$to_cod_representante'";
            $consulta2 = mysqli_query($conexao, $sql2);
            $registros2 = mysqli_num_rows($consulta2);
   
            if($registros2 >= 1){
               while($exibirRegistros2 = mysqli_fetch_array($consulta2)){
                $nome = $exibirRegistros2[1];
                $nome = ucwords(strtolower($nome)); 
                $telefone = $exibirRegistros2[2];
                $email = $exibirRegistros2[3]; 
                $sobre_nome = $exibirRegistros2[4];
                $sobre_nome = ucwords(strtolower($sobre_nome)); 
                $nome_foto = $exibirRegistros2[5];
                $user_id = $exibirRegistros2[0];
                $array = array("user_id" => "$user_id", "nome" => "$nome", "sobre_nome" => "$sobre_nome", "telefone" => "$telefone", "email" => "$email", "nome_foto" => "$nome_foto");
                   }
               }else{
                   $array = array("resposta" => "User Id nao encontrado.$to_user_id_pk" );
               }
           }
        }else{
           $array = array("resposta" => "Codigo de representante incorreto ou não possui medicos vinculados, digite novamente.");
        }
        $dadosTratados = json_encode($array);
        print $dadosTratados;
        mysqli_close($conexao);
   }

if($to_function ==  "consultaRepresentante"){
    $sql = "select * from representante where nome like '%$to_nome%'";
    $consulta = mysqli_query($conexao, $sql);
    $registros = mysqli_num_rows($consulta);
    $cont = 0;
 if($registros >= 1){
     $array = array();
     while($exibirRegistros = mysqli_fetch_array($consulta)){
         $cont++;
         $nome = $exibirRegistros[1];
         $nome = ucwords(strtolower($nome)); 
         $telefone = $exibirRegistros[2];
         $email = $exibirRegistros[3]; 
         $sobre_nome = $exibirRegistros[4];
         $sobre_nome = ucwords(strtolower($sobre_nome)); 
         $nome_foto = $exibirRegistros[5];
         $user_id = $exibirRegistros[0];
         array_push ($array, array("registro" => "$registros ", "user_id" => "$user_id", "nome" => "$nome", "sobre_nome" => "$sobre_nome", "telefone" => "$telefone", "email" => "$email", "nome_foto" => "$nome_foto"));
         $dadosTratados = json_encode($array);
         }
          print $dadosTratados;
     }else{
         $array = array("resposta" => "Representante n達o encontrado.");
         $dadosTratados = json_encode($array);
         print $dadosTratados;
     }
             mysqli_close($conexao);
}

if($to_function ==  "consultaMedicoUser_id_pk"){
 $sql = "select * FROM medico where user_id_pk = '$to_user_id_pk'";
 $consulta = mysqli_query($conexao, $sql);
 $registros = mysqli_num_rows($consulta);

 if($registros >= 1){
     while($exibirRegistros = mysqli_fetch_array($consulta)){
            $nome = $exibirRegistros[0];
            $nome = ucwords(strtolower($nome)); 
            $sobre_nome = $exibirRegistros[1];
            $sobre_nome = ucwords(strtolower($sobre_nome)); 
            $crm = $exibirRegistros[2];
            $estado = $exibirRegistros[11];
            $telefone = $exibirRegistros[3];
            $endereco = $exibirRegistros[5];
            $email = $exibirRegistros[4];
            $visitado = $exibirRegistros[6];
            $especialidade = $exibirRegistros[7];
            $user_id = $exibirRegistros[8];
            $cod_medicamentos = $exibirRegistros[9];
            $cod_representante = $exibirRegistros[10];
            $URL = "https://dsvideo.com.br/?uid=$exibirRegistros[8]";
            $array = array("saudacao" => "Ola, $nome!", "texto" => "Clique no link abaixo para acessar o conteudo:", "link" => "$URL", "nome" => "$nome", "sobre_nome" => "$sobre_nome", "crm" => "$crm", "estado" => "$estado", "telefone" => "$telefone", "endereco" => "$endereco", "email" => "$email", "visitado" => "$visitado", "user_id" => "$user_id", "cod_medicamentos" => "$cod_medicamentos", "cod_representante" => "$cod_representante");
         $dadosTratados = json_encode($array);
         print $dadosTratados;
         }
     }else{
         $array = array("resposta" => "User Id nao encontrado.$to_user_id_pk" );
         $dadosTratados = json_encode($array);
         print $dadosTratados;
     }
             mysqli_close($conexao);
}



if($to_function ==  "consultaRepresentatanteUser_id_pk"){
 $sql = "select * from representante where cod_representante_pk = '$to_user_id_pk'";
 $consulta = mysqli_query($conexao, $sql);
 $registros = mysqli_num_rows($consulta);

 if($registros >= 1){
     while($exibirRegistros = mysqli_fetch_array($consulta)){
        $nome = $exibirRegistros[1];
        $nome = ucwords(strtolower($nome)); 
        $telefone = $exibirRegistros[2];
        $email = $exibirRegistros[3]; 
        $sobre_nome = $exibirRegistros[4];
        $sobre_nome = ucwords(strtolower($sobre_nome)); 
        $nome_foto = $exibirRegistros[5];
        $user_id = $exibirRegistros[0];
        $array = array("user_id" => "$user_id", "nome" => "$nome", "sobre_nome" => "$sobre_nome", "telefone" => "$telefone", "email" => "$email", "nome_foto" => "$nome_foto");
        $dadosTratados = json_encode($array);
        print $dadosTratados;
         }
     }else{
         $array = array("resposta" => "Representante nao encontrado: $to_user_id_pk" );
         $dadosTratados = json_encode($array);
         print $dadosTratados;
     }
             mysqli_close($conexao);
}



