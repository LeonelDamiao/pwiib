<?php
    include "cabecalho.php";
    include "conexao.php";
    ?>

 <div class="row">
         <div class="col-4 offset-4">
             <form action="salvar_usuario.php" method="post" style="background-color:#0065ff">
                 <br>
                 <label for="Login">Login</label>
                 <input name="Login" type="text" class="form-control" />
                 <br/>

                 <label >senha</label>
                 <input name="name type="passeword" class="form-control />
                 <input type="checkbox" name="ativo" value="1" />
                 <br/>     <br/>
                 <button name="salvar_usuário" type="submit" class="btn btn-primary">

                     salvar usuário
                </button>
        </form>

    </div>
</div>