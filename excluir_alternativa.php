<?php
include "../conexao.php";
require_once "./alternativaRepository.php";

$repo = new alternativaRepository($conexao);

$id = $_GET['id'];
$idPergunta = $_GET['id_pergunta'];

$repo->excluir($id);

header("Location: ../alternativa.php?id=" . $idpergunta);