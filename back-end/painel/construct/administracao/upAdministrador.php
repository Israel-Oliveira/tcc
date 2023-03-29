<?php
 
 include  (__DIR__.'/../../../widgets/Model/dados.php');

  $administradores = new DadosEspecificos;
  $administradores = $administradores->getDadosEspecificos('administradores',$_GET['id']); 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styleNovoAdministrador.css">
    <title>Alterar administrador</title>
</head>
<body>

<a class="btnVoltar" href="../../index.php?tela=administradores">
    <h2>
        Voltar
    </h2>
</a>

<form id="formulario" action="">
    <input class="ipText" type="text" name="nome" id="nome" placeholder="Digite seu nome..." value="<?= $administradores[0]['nome']?>">
    <input class="ipText" type="email" name="email" id="email" placeholder="Digite seu e-mail..." value="<?= $administradores[0]['email']?>">
    <input class="ipText" type="password" name="senha" id="senha" placeholder="Digite sua senha..." value="<?= $administradores[0]['senha']?>">
    <input class="ipText" type="password" name="confirmarSenha" id="confirmarSenha" placeholder="Confirme sua senha...">
    <button class="btnCriar" type="submit" name="btnEnviar"> ATUALIZAR </button>
</form>
    <script>
       
        const formulario = document.querySelector('#formulario')

        formulario.addEventListener("submit", function(event) {
            
            var senha = document.querySelector('#senha').value
            var confSenha = document.querySelector('#confirmarSenha').value

            if(senha != confSenha){
                console.log("As senhas são diferentes")
                event.preventDefault();
            }else{
                console.log("As senhas são iguais")
    
            }
             
        });

        
    </script>
</body>
</html>