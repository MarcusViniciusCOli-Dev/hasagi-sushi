
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div class="container">
        <div class="logo_space">
            <img src="img/sushi_logo.png" alt="Logo Hasagui Sushi" class="logo">
            <h2 class="title">Login</h2>
        </div>

        <div class="form">
            <form action="valida_login.php" method="post">
        
                <div class="inputs">
                    <input type="text" class="input_login email" placeholder="Insira seu e-mail" name="login" required>
                    <a href="#" class="esqueceu">Esquceu seu email ou nome de usuário?</a>
                </div>

                <div class="inputs">
                    <input type="password" class="input_login senha" placeholder="Insira sua senha" name="senha" required>
                    <a href="#" class="esqueceu">Esquceu sua senha?</a>
                </div>

                <a href="cadastro.php" class="esqueceu n_conta">Não tem uma conta? Cadastre-se</a>

                
                <input type="submit" value="Entrar" class="entrar">
            </form>
        </div>
    </div>


</body>

</html>