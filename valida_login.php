<?php
    session_start();

    $_SESSION['verificar'] = true;

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $login_correto = 'administrador123';
        $senha_correta = 'hasagi';
        $login_digitado = $_POST['login'];
        $senha_digitada = $_POST['senha'];

        if($login_digitado == $login_correto && $senha_digitada == $senha_correta) {
            header('location: home.php');
        }
        else{
            header('location: index.php');
            
        }
    }
?>