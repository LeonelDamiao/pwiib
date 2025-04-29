<?php
include "conexao.php";
require_once "UsuarioRepository.php";
$repo = new UsuarioRepository($conexao);

if(isset($_POST["salvar_usuário"]))
{
    
$ativo=isset($_POST['ativo']) ?  $_POST['ativo'] : false;
$repo->Insert($_POST['login'], $_POST['senha'], $ativo);

header('location: usuarios.php');

}

else{

   header('location: usuarios.php');
}




?>