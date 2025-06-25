<?php
include "conexao.php";
require_once "perguntaRepository.php";
$repo = new perguntaRepository($conexao);

if( isset($_GET["id"]) && !empty($_GET["id"]) )
{
    $pergunta = $repo->buscarPorId($_GET["id"]);
    if($pergunta != null)
    {
        $repo->excluirUsuario($_GET["id"]);
    }
    header('location: pergunta.php');
}
else
{
    header('location: pergunta.php');
}

?>