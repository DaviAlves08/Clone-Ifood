<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="container mt-5 pt-5">
    <img src="{{ $loja->banner }}" alt="{{ $loja->nome }}" class="banner"/>
    <div class="col-4 row row-cols-2 mt-4 ml-5 pl-5">
        <img src="{{ $loja->imagem }}" alt="{{ $loja->nome }}" class="w-25 h-25 rounded-5 ml-5"/>
        <p class="fs-2 mt-3">{{ $loja->nome }}</p>
    </div>
</div>
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top mb-5 pb-5">
    <div class="container-fluid">
      <a href="../index"><img src="../images/ifood.png" alt="ifood-logo" width="120px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Entregador</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/estabelecimentos">Restaurante e Mercado</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active">Carreiras</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active">iFood Card</a>
          </li>
        </ul>
        <div class="navbar_register">
          <a href="../telacadastro" class="mx-5 text-decoration-none" style="color: red;">criar conta</a>
          <button type="button" class="btn btn-danger mr-5"><a href="../telalogin" class="text-decoration-none text-white">Entrar</a></button>
        </div>
      </div>
    </div>
  </nav>
<footer>
    <div class="container p-4 pb-0">
      <div class="row">
        <h2 class="fs-5">Explore por cidades</h2>
        <a href="#" class="text-end text-decoration-none text-danger">Ver todas</a>
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5">
          <ul class="list-unstyled mb-0 ">
            <li><a href="#" class="text-decoration-none text-secondary">Belo Horizonte</a></li>   
            <li><a href="#" class="text-decoration-none text-secondary">Brasília</a></li>
            <a href="#"  class="text-decoration-none text-secondary">
              <li><a href="#" class="text-decoration-none text-secondary" >Campinas</a></li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Curitiba</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Goiânia</li>
            </a>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5">
          <ul class="list-unstyled mb-0">
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Guarulhos</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>João Pessoa</li>
            </a>
            <a href="#" class="text-decoration-none text-secondary">
              <li>Natal</li>
            </a>
            <a href="#" class="text-decoration-none text-secondary">
              <li>Niterói</li>
            </a>
            <a href="#" class="text-decoration-none text-secondary">
              <li>Porto Alegre</li>
            </a>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5">
          <ul class="list-unstyled mb-0">
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Ribeirão Preto</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Rio de Janeiro</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Salvador</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Santo André</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Santos</li>
            </a>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5">
          <ul class="list-unstyled mb-0">
            <a href="#" class="text-decoration-none text-secondary">
              <li>São Bernado do Campo</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>São Caetano do Sul</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>São Paulo</li>
            </a>
          </ul>
        </div>
        <hr class="mb-4 mt-3">
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5">
          <h2 class="fs-6 pb-3">iFood</h2>
          <ul class="list-unstyled mb-0">
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Site Institucional</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Fale Conosco</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Carreiras</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>iFood Colômbia</li>
            </a>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5">
          <h2 class="fs-6 pb-3">Descubra</h2>
          <ul class="list-unstyled mb-0 ">
            <a href="#"  class="text-decoration-none text-secondary">
              <li>Cadastre seu Restaurante ou Mercado</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>iFood Shop</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>iFood Card</li>
            </a>
            <a href="#"  class="text-decoration-none text-secondary">
              <li>blog iFood Empresas</li>
            </a>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5 ">
          <h2 class="fs-6 pb-3">Social</h2>
          <a href="#"><img src="images/facebook.png" alt="" width="30px"></a>
          <a href="#"><img src="images/twitter.png" alt="" width="30px"></a>
          <a href="#"><img src="images/youtube.png" alt="" width="30px"></a>
          <a href="#"><img src="images/instagram.png" alt="" width="30px"></a>
        </div>
      </div>
    </div>
  </footer>
  <section>
    @yield('conteudo')
  </section>
</body>
</html>
