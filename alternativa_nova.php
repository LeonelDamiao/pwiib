<?php
include "cabecalho.php"; 
include "conexao.php";

$idpergunta = $_GET['id'];
?>

<div class="container mt-4">
    <h4>Nova Alternativa</h4>
    <form action="alternativas_salvar.php" method="post">
        <input type="hidden" name="id_pergunta" value="<?= $idpergunta ?>">

        <label>Texto da Alternativa:</label>
        <textarea name="texto" class="form-control" required></textarea>

        <br/>
        <label>É a correta?</label>
        <select name="correta" class="form-control" required>
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>
        <br/>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>

<?php   include "./InicioeFim/rodape.php";  ?>