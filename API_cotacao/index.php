<?php
require_once "app/modules/HgAPI.php";

$quotation = new HgAPI();
$return = $quotation->getAll();
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
	<link rel="stylesheet" href="public/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
	  <div class="container">
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="https://github.com/ednosmab/APIs">API Cotação</a>
				<div class="collapse navbar-collapse" id="textoNavbar">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="https://hgbrasil.com/status/finance">HG API</a>
						</li>
					</ul>
					<span class="navbar-text">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="https://www.linkedin.com/in/edson-garcia-14138a34/">Linkedin</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://bitbucket.org/edsongj/">Bitbucket</a>
						</li>
					</ul>
					</span>
				</div>
			</nav>
		</header>
		<div class="jumbotron">
			<h1 class="display-4">Cotação de Moedas</h1>
			<p class="lead">Um pequeno exemplo de consumo de uma api disponibilizada pela</p>
			<a class="btn btn-primary btn-lg"  href="https://hgbrasil.com/status/finance">HG API</a>
		</div>
		<div class="row">
			<?php if(!empty($return) && is_array($return)):?>
			<?php foreach ($return['results']['currencies'] as $currency):?>
			<?php if(isset($currency['name'])):?>
			<?php
				$variation = ($currency['buy'] < $currency['variation']) ? 'danger' : 'primary';
			?>
			<div class="col">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Cotação do <?=$currency['name']?></h5>
						<p class="card-text"><?=$currency['name']?> <span class="badge badge-pill badge-<?= $variation;?>"><?=$currency['buy']?></span>
					</div>
				</div>
			</div>
			<?php endif; endforeach; endif;?>
		</div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>