<?php

if(isset($_POST['btnEnviar'])){

    $title = $_POST['title'];
    $whatsapp = $_POST['whatsapp'];
    $instagram  = $_POST['instagram'];
    $id  = $_POST['id'];

    include (__DIR__.'/../../../widgets/connect.php');

    $sql = ("UPDATE configuracoes SET wzp = :whatsapp, insta = :instagram, title = :title WHERE id= :id");
    $stmt = $connPdo ->prepare($sql);  

    $stmt->bindValue(':title', $title);
    $stmt->bindValue(':whatsapp', $whatsapp);
    $stmt->bindValue(':instagram', $instagram);
    $stmt->bindValue(':id', $id);

    $stmt->execute();
    
}else{
    
}
include  (__DIR__.'/../../../widgets/Model/dados.php');

$configuracao = new Dados;
$configuracao = $configuracao->getDadosEspecificos('configuracoes',2); 
 

?>

<form id="formConfig" action="" method="post">
    <div class="labelInput">
        <label for="">TItulo da Página:</label>
        <input type="text" name="title" value="<?= $configuracao[0]['title']; ?>">
    </div>
<Br>
    <div class="labelInput">
        <label for="">Numero do WhatsApp:</label>
        <input type="text" name="whatsapp" value="<?= $configuracao[0]['wzp']; ?>">
    </div>
<Br>
    <div class="labelInput">
        <label for="">Link do Instagram:</label>
        <input type="text" name="instagram" value="<?= $configuracao[0]['insta']; ?>">
    </div>
<Br>
    <input type="hidden" name="id" value="2">
    <input id="btnEnviar" type="submit" value="ATUALIZAR" name="btnEnviar">
</form>