<html>

<head>

  <title>AlugaÊ</title>

  <meta charset="utf-8">
  <link rel="stylesheet" href={{ URL::asset('css/produto.css')}}>
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
      <div class="produto">
        <div class="produto-content">
          <div class="img-block">
            <img class="produto-img" src="<?= $produto->imagem ?>">
          </div>
          <div class="content-block">
            <h1 class="produto-nome"><?= $produto->nome ?></h1>
            <p class="produto-preco">R$<?= $produto->preco ?> o dia</p>
            <p class="produto-status"> Status: <?= $produto->status ?></p>
            <a href="https://api.whatsapp.com/send/?phone=55<?= $user->phone ?>">
              <button class="wpp">
                <p> Chame no Whatsapp </p>
              </button>
            </a>
          </div>
        </div>
      </div>
      <div class="produto-description">
        <h1 class="title">Descrição</h1>
        <p class="description-content">
          <?= $produto->descricao ?>
        </p>
      </div>

    </div>
</body>

</html>