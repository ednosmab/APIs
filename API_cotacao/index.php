<?php
require_once "app/modules/HgAPI.php";

$cotacao = new HgAPI();
$retorno = $cotacao->getAll();
if(!empty($retorno) && is_array($retorno)){
  $moedaD = $retorno[0];
  $moedaE = $retorno[2];
  $variacaoD = ($retorno[1] > -2.927) ? 'danger' : 'primary';
  $variacaoE = ($retorno[3] > -2.227) ? 'danger' : 'primary';
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>API Cotação</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="public/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="public/images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="col">
        <div class="row">
            <p>Cotação do Dólar</p>
        </div>
        <div class="row">
            <p>Dólar <span class="badge badge-pill badge-<?= $variacaoD?>"><?= $moedaD?></span></p>
        </div>
      </div>
      <div class="col">
        <div class="row">
            <p>Cotação do Euro</p>
        </div>
        <div class="row">
            <p>Euro <span class="badge badge-pill badge-<?= $variacaoE?>"><?= $moedaE?></span></p>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>