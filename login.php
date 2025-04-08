<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PWII B</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link href="estilo.css" rel="stylesheet" />
</head>
<body>
   

<div class="container ">

  <div class="row">
    <div class="col-md-6 offset-md-3">
        <br>
        <br>
<img src="defesa-civil-brasil.png" alt="Flowers in Chania" width="640" height="300">
<form action="verificar_login.php" method="post" class=" bg-primary " >
    <br>
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

