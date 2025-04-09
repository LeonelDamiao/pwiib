<?php

$servidor= "localhost";
$usuario="root";
$senha="PW_BD";
$conexao= new mysqii($servidor, $usuario, $senha, $$banco);
if ($conexao->connect_eror){
    die("falha na conexão: " , $conexao->connect_error);
}

?>