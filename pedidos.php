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
    <title>Pedidos</title>
    <link rel="stylesheet" href="pedidos.css">
    <link rel="website icon" href="img/logo_Oficial.png" type="png">
    <script src="pedidos.js"></script>
</head>

<body>

<!--modal1-->
<div class="bg">
    </div>
    <div class="modal">
        <div class="contentModal">
        <h2 class="modalTitle">Finalizar pedido</h2>
        <h3>Hora:</h3>
        <p>XX:XX</p>
        <h3>Pedidos:</h3>
        <p>Yakissoba</p>

        
        <textarea name="observacao" class="text_obs" cols="30" rows="10" placeholder="Insira aqui as observações sobre o pedido"></textarea>
        <h3>Total:</h3>
        <p>R$59,98</p>
        <h3>Mesa:</h3>
        <p>XX</p>
        <div class="btn_modal">
        <button class="enviar" onclick="enviarCozinha()">Finalizar pedido</button>
        <button class="fechar" onclick="fechar()">Fechar</button>
        </div>
        </div>
    </div>

    
<!--Fim modal1-->

<!--modal2-->
<div class="bg2">
    </div>
    <div class="modal2">
        <div class="contentModal2">
            <h2 class="modalTitle2">Seu pedido foi finalizado</h2>
            <img src="img/corrigir.png" alt="Certo" class="certo">
            <button class="fechar" onclick="fechar2()">Fechar</button>
        </div>
        </div>
    </div>

    
<!--Fim modal2-->




    <div class="comanda">
        <div class="comandos">
            <a href="home.php"><img src="img/de-volta.png" alt="Voltar" class="icon"></a>
            <h2 class="title_comanda">Comanda</h2>
            <a href="logout.php"><img src="img/sair.png" alt="Desconectar" class="icon"></a>
        </div>

        <div class="form">
            <div class="form_hasagi">
                <div class="inputs">
                    <input type="text" class="input_login mesa" placeholder="Mesa">
                </div>

                <div class="inputs">
                    <input type="text" class="input_login hora" placeholder="Horário">
                </div>
            </div>

            <div class="inputs">
                <input type="text" class="input_login cliente" placeholder="Nome do cliente">
            </div>

        </div>

        <!--Criação de produtos-->
        <div class="novosProdutos">
            <div class="produto">
                <div class="imgQuant">
                    <img class="img_card comanda_img" src="img/yakissoba.png" alt="">
                    <div class="quantidade">
                        <input type="number" class="input_login quant" placeholder="Quantidade">
                    </div>
                </div>
                <div class="textoRemove">
                    <h2 class="nomeComanda">Yakissoba</h2>
                    <h3 class="precoComanda">R$23,89</h3>

                    <button class="btnRemove">Remover</button>
                </div>
            </div>
        </div>

        <div class="envio">
            <div class="inputs preco">
                <input type="text" class="input_login valor" placeholder="Preço">
            </div>

            <button class="btn_enviar" onclick="abrirModal()">Enviar pedido</button>



        </div>
    </div>


    <div class="cardapio">
        <h2 class="title_cardapio">Cardápio</h2>
        <div class="comidas" >

        <div class="card">
            <img src="img/sushi.png" alt="Sushi" class="img_card1">
            <div class="content">
                <h3 class="nome">Sushi</h3>
                <p class="preco">R$38,99</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>

        <div class="card">
            <img src="img/yakissoba.png" alt="Yakissoba" class="img_card">
            <div class="content">
                <h3 class="nome">Yakissoba</h3>
                <p class="preco">R$29,99</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>

        <div class="card">
            <img src="img/tempura.png" alt="tempura" class="img_card">
            <div class="content">
                <h3 class="nome">Tempurá</h3>
                <p class="preco">R$16,99</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>

        <div class="card">
            <img src="img/Ro.png" alt="hot-roll" class="img_card">
            <div class="content">
                <h3 class="nome">Hot-roll</h3>
                <p class="preco">R$36,99</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>

        <div class="card">
            <img src="img/urumaki.png" alt="urumaki" class="img_card5">
            <div class="content">
                <h3 class="nome">Urumaki</h3>
                <p class="preco">R$34,99</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>

        <div class="card">
            <img src="img/harumaki.png" alt="harumaki" class="img_card">
            <div class="content">
                <h3 class="nome">Harumaki</h3>
                <p class="preco">R$26,99</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>

        <div class="card">
            <img src="img/lamen.png" alt="lamen" class="img_card">
            <div class="content">
                <h3 class="nome">Lamén</h3>
                <p class="preco">R$39,40</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>

        <div class="card">
            <img src="img/barca.png" alt="barca" class="img_card8">
            <div class="content">
                <h3 class="nome">Barca</h3>
                <p class="preco">R$149,99</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>

        <div class="card">
            <img src="img/shimeji.png" alt="shimeji" class="img_card">
            <div class="content">
                <h3 class="nome">Shimeji na chapa</h3>
                <p class="preco">R$22,99</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>

        <div class="card">
            <img src="img/sashimi.png" alt="sashimi" class="img_card">
            <div class="content">
                <h3 class="nome">Sashimi</h3>
                <p class="preco">R$45,80</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>

        <div class="card">
            <img src="img/Sunomono.png" alt="Sunomono" class="img_card11">
            <div class="content">
                <h3 class="nome">Sunomono</h3>
                <p class="preco">R$15,80</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>

        <div class="card">
            <img src="img/Temaki.png" alt="temaki" class="img_card">
            <div class="content">
                <h3 class="nome">Temaki</h3>
                <p class="preco">R$20,99</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>

        <div class="card">
            <img src="img/Onigiri.png" alt="oniguiri" class="img_card13">
            <div class="content">
                <h3 class="nome">Oniguiri</h3>
                <p class="preco">R$11,50</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>

        <div class="card">
            <img src="img/Gyoza.png" alt="guioza" class="img_card14">
            <div class="content">
                <h3 class="nome">Guioza</h3>
                <p class="preco">R$27,90</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>
        
        <!--Bebidas-->

        </div>

        <h2 class="title_cardapio">Bebidas</h2>
        <div class="bebidas" >

        <div class="card">
            <img src="img/agua.png" alt="Água" class="img_card">
            <div class="content">
                <h3 class="nome">Água</h3>
                <p class="preco">R$03,99</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>

        <div class="card">
            <img src="img/coca.png" alt="Refri" class="img_card16">
            <div class="content">
                <h3 class="nome">Refrigerante</h3>
                <p class="preco">R$07,99</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>

        <div class="card">
            <img src="img/Juice.png" alt="Suco" class="img_card">
            <div class="content">
                <h3 class="nome">Sucos (diversos)</h3>
                <p class="preco">R$11,50</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>

        <div class="card">
            <img src="img/Sake.png" alt="Sakê" class="img_card">
            <div class="content">
                <h3 class="nome">Sakê</h3>
                <p class="preco">R$23,99</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>

        <div class="card">
            <img src="img/wine.png" alt="Vinho" class="img_card">
            <div class="content">
                <h3 class="nome">Vinho</h3>
                <p class="preco">R$18,99</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>

        <div class="card">
            <img src="img/caipirinha.png" alt="caipirinha" class="img_card20">
            <div class="content">
                <h3 class="nome">Caipirinha</h3>
                <p class="preco">R$13,60</p>
                <button class="btn_card">Escolher</button>
            </div>
        </div>
        
        </div>
    </div>


</body>

</html>