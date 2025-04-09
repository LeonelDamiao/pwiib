<?php include "cabecalho.php";?>
   

<div class="container ">

  <div class="row">
    <div class="col-md-6 offset-md-3"><br><br>
        <br>
<img src="img/defesa-civil-brasil.png" alt="Flowers in Chania" width="636" height="250">
<form action="verificar_login.php" method="post" class=" bg-primary " >
    <br><br>
<input type="text" class="form-control" id="inpuText" placeholder="Digite o seu Login"  />
<br>
<input type="password" class="form-control" id="inputPassword2" placeholder=" Digite a sua Senha" />
<?php
if (isset($_GET["erro"]) && empty($_GET["error"])){
    echo $_GET['erro'];
}
?>
<br />
<button type="submit">
    Logar
</button>
</form>
    </div>
  </div>
</div>



<script src="bootstrap.bundle.min.js"></script>
</body>
</html>