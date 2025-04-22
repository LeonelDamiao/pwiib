<?php 
include "cabecalho.php";
include "conexao.php";
require_once "usuarioRepository.php";
$repo = new UsuarioRepository($conexao);

$usuarios = $repo->buscarTodos();



?>

<div class="row">
  <div class=" col-12">
   <div class="card">
    <div class="card-header">
      <b>Lista de usuarios</b>
    </div>
      <div class="card-body">
     <div class="row">
      <div class="col-4">
        <a class="btn btn-success">
          Novo usuário
        </a>
      </div>
      <div class="col-4">
        <input name="buscar" class="form-control" />
      </div>
      <div class="col-4">
        <button type="submit" class="btn btn-primary">
          Pesquisar
        </button>
      </div>
     </div>
     <div class="row">
       <table class="table table-striped">
           <thead>
               <tr>
                   <th>Id</th>
                   <th>Login</th>
                   <th>Ativo</th>
                   <th></th>
               </tr>
           </thead>
           <tbody>
               <?php



           foreach ($usuarios as $user) {

echo " <h1>Login: ".$item['LOGIN'] .
    " Senha: ".$item[ 'SENHA'] .
        " Ativo: ".$item[ 'ATIVO'] .

        "</h1><br>";
           }

        ?>
           </tbody>
       </table>
    </div>
     </div>
       </div>
  </div>
</div>

<?php
 include "rodape.php"; 


 ?>
