<?php

include "conexao.php";
require_once "disciplinaRepository.php";
$repo = new disciplinaRepository($conexao);

if( isset($_POST["ID"]) && isset($_POST['LOGIN']) )
{
    $repo->Editar($_POST['LOGIN'],$_POST['ID'],$_POST['ATIVO']);
    header('location: disciplina.php');
}
else
{
    header('location: disciplina.php');

}

?>