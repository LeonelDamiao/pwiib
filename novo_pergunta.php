<?php   
    include "cabecalho.php";
    include "conexao.php";
?>
<div class="row">
    <div class="col-4 offset-4">
        <form action="salvar_pergunta.php" method="post">
            <br>
            <label>Nome da pergunta</label>
            <input name="nome" type="text" class="form-control" />
            <br />
            <button name="salvar_pergunta" type="submit" class="btn btn-primary">
                Salvar pergunta
            </button>
        </form>
    </div>
</div>


<?php include "rodape.php"; ?>