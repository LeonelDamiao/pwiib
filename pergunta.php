<?php 

    include "cabecalho.php"; 
    include "conexao.php";
    require_once 'perguntaRepository.php';

    //Crio um objeto do tipo perguntanaRepository chamado repo
    //E recebe a conexão como parametro
    $repo = new perguntaRepository($conexao);

    if( isset($_GET['busca']) && !empty($_GET['busca']) )
    {
        $usuarios = $repo->Pesquisar( $_GET['busca'] );
    }
    else
    {
        //Chamei o metodo BuscarTodos para puxar 
        // todos disciplinas do banco de dados
        $pergunta = $repo->buscarTodos();
    }
    

?>
<div class="row">
    <div class="col-12">
        <br />
        <div class="card">
            <div class="card-header">
                <b>Lista de Perguntas</b>
            </div>
            <div class="card-body">
             <form action="pergunta.php" method="get">
                <div class="row">
                        <div class="col-4">
                            <a href="nova_pergunta.php" class="btn btn-success">
                            Nova pergunta
                            </a>
                        </div>
                        <div class="col-4">
                            <input name="busca" class="form-control" />
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">
                                Pesquisar
                            </button>
                        </div>
                </div>
            </form>   

              <div class="row">
                <table class="table table-striped table-hover">
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
                            //foreach serve para ler todas as perguntass
                            // vindos do banco em formato de array chave valor
                            foreach ($pergunta as $user) {
                                echo "<tr>
                                        <td>".$user['ID']."</td>
                                        <td>".$user['PERGUNTA']."</td>
                                      
                                        <td>
                                            <a class='btn btn-danger'
                                                 href='excluir_pergunta.php?id=".$user['ID']."'>Excluir</a>
                                            <a class='btn btn-warning'
                                                 href='editar_pergunta.php?id=".$user['ID']."'>Editar</a>
                                        </td> 
                                      </tr>";
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