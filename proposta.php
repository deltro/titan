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




<!-- banner -->
<div class="position-relative overflow-hidden text-center color-brand">
  <div class="col-md-5 p-lg-5 pt-3 pb-3 mx-auto my-5 text-white">
    <p class="display-4 cta">Receber Proposta</p>
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<!-- Formulário -->

<div id="proposta" class="w-50 mx-auto mt-5 mb-5" >
  <div class="form-content p-3">
    <form id="form-send-msg" action="includes/insertProposta.php" method="POST">
      <div class="mb-3">
        <input class="form-control" type="text" name="txtName" id="txt-name" required placeholder="*Nome">
      </div>
      <div class="mb-3">
        <input class="form-control" type="email" name="txtEmail" id="txt-email" required placeholder="*Email">
      </div>
      <div class="mb-3">
        <textarea class="form-control" name="txtMsg" id="txt-msg" rows="2" placeholder="Mensagem"></textarea>
      </div>
      <div class="mb-3">
      	<select class="form-select" name="txtService" aria-label="Default select example">
    		  <option selected>Selecione o serviço pretendido</option>
    		  <option value="1">Anúncios no Facebook</option>
    		  <option value="2">Anúncios no Youtube</option>
    		  <option value="3">Anúncios no Google</option>
    		  <option value="4">Criação de funil de vendas</option>
    		  <option value="5">Criação de anúncios Estáticos</option>
    		  <option value="6">Criação de anúncios em Vídeo</option>
		    </select>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="chkRgpd" id="chk-rgpd" required>
        <label class="form-check-label" for="chk-rgpd">
        Tomei conhecimento e aceito a Política de privacidade.
      </label>
      </div>

      <button type="submit" name="submit" class="btn btn-success btn-block mt-3">Enviar</button>
    </form>
  </div>
</div>

<?php 
require 'includes/footer.php';
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>