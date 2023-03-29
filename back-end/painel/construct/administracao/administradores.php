
<?php
  include  (__DIR__.'/../../../widgets/Model/dados.php');

  $administradores = new Dados;
  $administradores = $administradores->getDados('administradores'); 

?>

<section id="fundoPainel">
  <a class="btnIncluir" href="./construct/administracao/novoAdministrador.php">
    <h5>Incluir</h5>
  </a>
    <div class="form">
        <table class="table table-white table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">E-mail</th>
              <th scope="col">Editar</th>
              <th scope="col">Excluir</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($administradores as $administradore) { ?>
            <tr>
              <th scope="row"><?=$administradore['id']?></th>
              <td><?=$administradore['nome']?></td>
              <td><?=$administradore['email']?></td>
              <td>
                <a href="construct/administracao/upAdministrador.php?id=<?=$administradore['id']?>">
                  <img src="./icones/lapis.png" alt="">
                </a>
              </td>
              <td><a href="construct/administracao/deleteAdministrador.php?id=<?=$administradore['id']?>">
              <img src="./icones/lixeira.png" alt="">
              </a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
</section>