<?php

include "conexao.php";
require_once "perguntaRepository.php";
$repo = new perguntaRepository($conexao);

if( isset($_POST["ID"]) && isset($_POST['LOGIN']) )
{
    $repo->Editar($_POST['LOGIN'],$_POST['ID'],$_POST['ATIVO']);
    header('location: pergunta.php');
}
else
{
    header('location: pergunta.php');

}

?>