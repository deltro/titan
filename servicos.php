<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Titan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">

</head>
<body>

<?php 
require 'includes/menu.php';
require 'includes/connection.php';
?>

<?php
  $sql = 'SELECT * FROM servicos';
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
?>

<!-- banner -->
<div class="position-relative overflow-hidden text-center color-brand">
  <div class="col-md-5 p-lg-5 pt-3 pb-3 mx-auto my-5 text-white">
    <p class="display-4 cta">Serviços</p>
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<!--Servicos com PHP-->
<section id="servicos">
  <div class="container">
    <div class="top-servicos">
      <div class="row">
        <?php 
  while($obj = $stmt->fetchObject()){

  ?>

        <div class="col-12 col-sm-6 col-md-4">
          <div class="selecao-servicos">
            <div class="icon-servico">
                <i class="<?= $obj->icone ?>"></i>
              </div>
              <div>
                <h2><?= $obj->name ?></h2>
                <p><?= $obj->description ?></p>
              </div>
          </div>
        </div>
  <?php
  }
  ?>
      </div>
    </div>
  </div>
</section>

<!-- Exemplo resultados -->
<div class="container">
  <div class="text-center mt-5 mb-5">
    <h2 class="cta">Resultados com Anúncios no Facebook para Clínicas Dentárias</h2>
    <p>O nosso objetivo é trazer o melhor retorno possível para os nossos clientes, para que se sinta seguro ao investir em marketing digital para a sua empresa partilhamos consigo alguns dos nossos resultados. Focamo-nos principalmente em Clínicas Dentárias.</p>
  </div>
</div>

<!--  Imagens exemplos -->


<div id="carouselExampleIndicators" class="carousel slide w-75 mx-auto" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-success"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="bg-success"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="bg-success"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./imagens/imagens_resultados/1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./imagens/imagens_resultados/2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./imagens/imagens_resultados/3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-success" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-success" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>


<!-- Exemplo Anúncios-->
<div id="anuncios" class="container">
  <div class="text-center mt-5 mb-5">
    <h2 class="cta">Exemplos de Anúncios no Facebook criados por nós</h2>
    <p>Os nossos anúncios são testados para garantir os melhores resultados.</p>
  </div>

  <div class="row align-middle text-center">
    <div class="col-12 col-sm-6">
      <img class="w-75" src="./imagens/imagens_resultados/AB.png" alt="anuncio1">
    </div>
    <div class="col-12 col-sm-6">
      <img class="w-75" src="./imagens/imagens_resultados/Y1.png" alt="anuncio2">
    </div>
   </div>
</div>

<!-- Exemplo contactos-->
<div class="container">
  <div class="text-center mt-5 mb-5">
    <h2 class="cta">Funil de Vendas</h2>
    <p>Após os anúncios serem publicados todos os pedidos de contacto são automaticamente enviados.</p>
  </div>

  <div class="row mb-5">
    <div class="col-12 col-sm-6">
      <img class="w-100" src="./imagens/imagens_resultados/A.png" alt="anuncio1">
    </div>
    <div class="col-12 col-sm-6">
      <img class="w-100" src="./imagens/imagens_resultados/mail.png" alt="anuncio2">
    </div>
 
  </div>
</div>


<?php 
require 'includes/footer.php';
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>



</body>
</html>