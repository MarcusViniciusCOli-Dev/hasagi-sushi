<?php
session_start();

if($_SESSION['verificar'] !== true){
    header('location: index.php');
        
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadstro</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>

    <div class="container">
        <div class="marca">
        <h2 class="title">Seja bem-vindo</h2>
        <img src="img/logo_Oficial.png" alt="Logo hasagui sushi preenchido" class="logo">
        </div>
        <div class="links">
            <a href="#" class="link"> Ver pedido</a>
            <a href="pedidos.php" class="link">Fazer pedidos</a>
        </div>
    </div>


</body>

</html>