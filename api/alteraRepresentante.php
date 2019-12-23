<?php
include_once("conexao.php");

if( $_FILES ) { // Verificando se existe o envio de arquivos.
	
	if( $_FILES['arquivo'] ) { // Verifica se o campo não está vazio.	
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$user_id = $_POST['user_id'];
		$dir = '../arquivos/'; // Diretório que vai receber o arquivo.
		$tmpName = $_FILES['arquivo']['tmp_name']; // Recebe o arquivo temporário.
		$name = $_FILES['arquivo']['name']; // Recebe o nome do arquivo.
		$nameFake = substr($name,0,strrpos($name,"."));
		//$name = $nameFake;
		$extensao = pathinfo($name, PATHINFO_EXTENSION);
		date_default_timezone_set('America/Sao_Paulo');
		$nameFinal = $nameFake . $date = date('_d-m-Y_H-i-s') .'.'. $extensao;

		// move_uploaded_file( $arqTemporário, $nomeDoArquivo )
		if( move_uploaded_file( $tmpName, $dir . $nameFinal) ) { // move_uploaded_file irá realizar o envio do arquivo.		
			$sql = "update representante SET nome='$nome', sobre_nome = '$sobrenome', telefone = '$telefone', email ='$email', nome_foto = '$nameFinal' where cod_representante_pk = '$user_id'";
			$salvar = mysqli_query($conexao, $sql);
			$linhas = mysqli_affected_rows($conexao);
			mysqli_close($conexao); 
			header('Location: ../representante/consultarRepresentante.html'); // Em caso de sucesso, retorna para a página de sucesso.			
		} else {			
			header('Location: erro.php'); // Em caso de erro, retorna para a página de erro.			
		}
		
	}

}
