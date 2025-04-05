<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="verificar_login.php" method="post">
<br />Email:
<input type="text" class="form-control" name="email" />
<br />Senha:
<input type="password" class="form-control" name="senha" />
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
</body>
</html>