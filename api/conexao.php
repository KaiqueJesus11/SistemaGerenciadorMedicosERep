<?php
header('Access-Control-Allow-Origin: *');
$hostname = "localhost";
$user = "user";
$password = "********";
$database = "nome_bd";
$conexao = mysqli_connect($hostname,$user,$password,$database);
if(!$conexao){
    print "Falha na conexao com o banco de dados";
}
?>