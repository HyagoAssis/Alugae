<html>

<head>

	<title>AlugaÊ</title>

	<meta charset="utf-8">
	<!--<link rel="stylesheet" href="css/styles.css">-->
	<!--<script type="text/javascript" src="js/scripts.js"></script>-->
	<meta name="viewport" content="width=device-width, inital-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<style type="text/css">
		.menu {
			color: #345f8d;
			font-size: 25px;
			float: right;
			height: 70px;
			width: 100%;
			margin-top: 40px;
		}

		.categorias a {
			color: white;
			font-size: 20px;
		}

		h1 {
			font-size: 20px;
		}

		.produtos {
			font-size: 15px;
			color: #345f8d;
			text-align: center;
		}
	</style>

</head>


<body style="background-color: #b2b2b2">

<div class="container" style="padding-top: 5%; padding-bottom: 5%">
    <div class="container d-flex align-middle">
      <img src="{{ asset('img/icon.png') }}" style="float: left">
      <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-lg menu">
        <b><a style="color: #345f8d;font-size: 30px" class="navbar-brand" href="/">alugaê</a></b>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="padding-left: 15%;">
          <ul class="navbar-nav">
            <li class="nav-item" style="margin-right: 25%">
              <a style="color: #345f8d;" class="nav-link" href="/">Sobre</a>
            </li>
            <li class="nav-item" style="margin-right: 25%">
              <a style="color: #345f8d;" class="nav-link" href="/">Apoiar</a>
            </li>
            <li class="nav-item" style="margin-right: 25%">
              <a style="color: #345f8d;" class="nav-link" href="/dashboard">Anunciar</a>
            </li>
            <li class="nav-item">
              <a style="color: #345f8d;" class="nav-link" href="/dashboard">Entrar</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
		<div class="container rounded-lg" style="padding: 5%;background-color: white; margin-top: 5%">

			<!-- <ul class="nav justify-content-center rounded-lg categorias" style="background-color: gray;">
				<li class="nav-item">
					<a class="nav-link active" href="#">Eletrônicos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Casa</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Moda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Saúde</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Esportes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Livros</a>
				</li>
			</ul>

			<h1 style="margin-top: 5%">Recentes</h1> -->

			<div class="row row-cols-1 row-cols-md-3">
				<?php foreach ($produtos as $produto) : ?>
					<div class="col mb-4">
					<a href="/produto/<?= $produto->id ?>">
						<div class="card produtos">
							<center><img src="<?= $produto->imagem ?>" width="150px" height="150px"></center>
								<div class="card-body">
									<h5 class="card-title"><?= $produto->nome ?></h5>
									<p class="card-text"><small class="text-muted">R$<?= $produto->preco ?> o dia</small></p>
								</div>
							</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>


		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>