<?php
include "cabecalho.php"; 
include "conexao.php";
require_once "perguntaRepository.php";
require_once "alternativaRepository.php";

$repoPergunta = new perguntaRepository($conexao);
$repoAlt = new alternativaRepository($conexao);

$pergunta = $_GET['id'];
$pergunta = $repopergunta->buscarPorId($idpergunta);
$alternativa = $repoalt->buscarPorpergunta($idpergunta);
?>

<div class="container mt-3">
    <h4>Pergunta: <?= htmlspecialchars($pergunta['PERGUNTA']) ?></h4>
    <a href="alternativa_nova.php?id=<?= $idpergunta ?>" class="btn btn-success mb-3">Nova Alternativa</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Texto</th>
                <th>Correta</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alternativa as $alt): ?>
            <tr>
                <td><?= htmlspecialchars($alt['TEXTO']) ?></td>
                <td><?= $alt['CORRETA'] ? 'Sim' : 'Não' ?></td>
                <td>
                    <a href="editar_alternativa.php?id=<?= $alt['ID'] ?>" class="btn btn-warning">Editar</a>

                    <a href="excluir_alternativa.php?id=<?= $alt['ID'] ?>&id_pergunta=<?= $idpergunta ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php include "./InicioeFim/rodape.php";  ?>