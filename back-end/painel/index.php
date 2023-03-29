<?php
    session_start();

    if(isset($_SESSION['login'])){

    include './construct/headerPainel.php';

?>

<div id="painel">
    <div id="opPainel">
        <div class="pedidos">
            <a href=""><h4>PEDIDOS</h4>
        </a>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Administração
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div id="opButtom">
                      <form action="" method="GET">
                          <input type="hidden" name="tela" value="configuracoes">
                          <button id="buttomOpecoes" type="submit">Configurações</button>
                      </form>
                      <form action="" method="GET">
                          <input type="hidden" name="tela" value="administradores">
                          <button id="buttomOpecoes" type="submit">Administradores</button>
                      </form>
                      <form action="" method="GET">
                          <input type="hidden" name="tela" value="configuracoes">
                          <button id="buttomOpecoes" type="submit">Configurações</button>
                      </form>
                    </div>
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Accordion Item #2
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Accordion Item #3
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                
                </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tlPainel">
        <?php

            if(isset($_GET['tela'])){
                $tela = $_GET['tela'];

                if($tela == "configuracoes"){
                    include './construct/configuracoes/configuracoes.php';
                }else if($tela == "administradores"){
                    include './construct/administracao/administradores.php';
                }
            }else{
                
            }

        ?>
    </div>
</div>


<?php    
    include './construct/footerPainel.php';
    }else{
        header('location: login.php'); 
    }
?>