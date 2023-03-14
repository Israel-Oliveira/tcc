<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="stylesheet" href="./assets/style/modalCarrinho.css">
    <link rel="stylesheet" href="./assets/style/style-category.css">
    <link rel="stylesheet" href="./assets/style/style-category-teste.css">

    <style>
        :root {
            --quant-car: "4";
        }

        .card:nth-child(1){
            margin-top: 10px;
        }
        .card:nth-child(2){
            margin-top: 10px;
        }
    </style>

    <title>Document</title>
</head>

<body>
    <nav>
        <div class="containeer">
            <div class="header">
                <div class="icones">
                    <img src="./upload/img/menu-aberto.png" alt="">
                </div>
                <div class="logo">
                    <a href="./index.php">LOGO</a>
                </div>
                <div class="carrinho">
                    <img src="./upload/img/carrinho-carrinho.png" alt="">
                </div>
            </div>
        </div>
    </nav>

    <div id="areaModal" class="desativo" style="z-index: 200;">
        <div id="modalCarrinnho">

        </div>
    </div>