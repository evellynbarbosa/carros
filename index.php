<?php
/* conexao com o bd*/
$servername = "baseteste.srv.br";
$username = "basetestesrv_u_evellyn";
$password = "piorsaladomundo";
$database = "baseteste_evellynfernanda";

$conexao = mysqli_connect($servername, $username,$password,$database);

if(!$conexao){
    die("falhou a conexão".mysqli_connect_error());
}else{
    echo "conectado com sucesso";
}
?>