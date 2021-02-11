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
  $sql = 'SELECT * FROM departamentos';
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
?>

<!-- Call to Action -->
<div class="position-relative overflow-hidden text-center bg-light bg-img">
  <div class="col-md-5 p-lg-5 pt-3 pb-3 mx-auto my-5 bg-light rounded border border-success">
    <p class="display-4 cta" >Quer aumentar as suas vendas em 30%?</p>
    <p class="lead cta">Multiplique as suas vendas. Expanda a sua empresa.</p>
    <a id="btn-contactar" class="btn color-brand text-white cta" href="#">Marcar Reunião</a>
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<!-- Com quem trabalhamos -->
<div style="background: url(imagens/back_resultados.png) no-repeat center center/cover;" class="bg-color">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 offer text-center">
        <h2 class="pt-4 cta">Em 2019 Gerámos Mais De 2 Milhões De Euros Em Vendas Para:</h2>
        <hr>
        <p>Na TITAN não trabalhamos com todas as indústrias. Estas são as indústrias que dominamos:
          Se a sua empresa se enquadra numa destas indústrias, e caso queira aumentar as suas vendas, peça já uma proposta gratuita, e descubra se, e como, podemos crescer o seu negócio! Clique no botão abaixo para receber a sua proposta:</p>
          <a href="proposta.php" class="btn color-brand text-white">Receber proposta gratuita</a>
          <img src="imagens/empresas.png" style="max-width: 500px;max-height: 300px" alt="...">
      </div>

      <div class="col-12 col-md-6 text-center">
        <div class="emp pt-2">
          <h3>Clínicas Dentárias</h3>
          <p>Ajude mais pacientes a colocarem implantes dentários. Aumente as vendas de Invisalign e/ou alinhadores.</p>
        </div>
        <div class="emp pt-2">
          <h3>Stands Automóveis</h3>
          <p>Desde carros elétricos até veículos de combustão, venda mais viaturas por mês através da internet.</p>
        </div>
        <div class="emp pt-2">
          <h3>Mediadoras de Seguros</h3>
          <p>Geramos as melhores Leads de Redução de Seguro Vida Associado Ao Crédito Habitação no mercado nacional.</p>
        </div>
        <div class="emp pt-2">
          <h3>Outras Indústrias...</h3>
          <p>Se a sua Agência Imobiliária quer vender mais casas, se o seu Escritório de Contabilidade precisar de mais clientes, ou se a sua Clínica não estiver com marcações até ao final do mês, contacte-nos!</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Departamentos com php -->
<div class="bg-light">
  <div class="container text-center">
    <div class="row"><h2 class="mt-3 mb-3 cta">Departamentos</h2></div>
     <div class="row">
        <?php 
  while($obj = $stmt->fetchObject()){

  ?>
        <div class="card col-12 col-md-4 box">
          <img src="imagens/servico<?= $obj->id ?>.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title cta"><?= $obj->name ?></h5>
            <p class="card-text"><?= $obj->description ?></p>
            <a href="servicos.php" class="btn color-brand text-white">Informações</a>
          </div>
        </div>

  <?php
  }
  ?>
    </div>
  </div>
</div>

<!-- Formulário -->

<div id="form-msg" class="d-none" >
  <div class="form-header">
    <div class="text-center text-white font-weight-bold">Marcar Reunião</div>
    <div class="text-center text-white">Preencha o formulário e marque uma breve reunião para saber como o podemos ajudar.</div>
  </div>
  
  <div class="form-content p-3">
    <form id="form-send-msg" action="includes/insert.php" method="post">
      <div class="mb-3">
        <input class="form-control" type="text" name="txtName" id="txt-name"  required placeholder="*Nome">
      </div>
      <div class="mb-3">
        <input class="form-control" type="email" name="txtEmail" id="txt-email"  required placeholder="*Email">
      </div>
      <div class="mb-3">
        <input id="date" type="date" name="txtDate" value="2020-12-10">
      </div>
      <div class="mb-3">
        <input type="time" id="hora" name="txtHour" min="08:00" max="16:00" >
      </div>
      <div class="mb-3">
        <textarea class="form-control" name="txtMsg" id="txt-msg" rows="2" required placeholder="*Mensagem"></textarea>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="chkRgpd" id="chk-rgpd" required>
        <label class="form-check-label" for="chk-rgpd">
        Tomei conhecimento e aceito a Política de privacidade.
        </label>
      </div>
      <button type="submit" name="submit" class="btn btn-success btn-block mt-3">Enviar</button>
      <button  id="btn-fechar" class="btn btn-success btn-block mt-3">Fechar</button>  
    </form>
  </div>
 </div>



<?php 
require 'includes/footer.php';
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="js/titan.js"></script>
</body>
</html>