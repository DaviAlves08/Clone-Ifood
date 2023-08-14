<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Ifood</title>
</head>
<body>
    <div class="bg-body-tertiary">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
                <div class="container-fluid">
                    <img src="images/ifood.png" alt="ifood-logo" width="125px">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Entregador</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="estabelecimentos">Restaurante e Mercado</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active">Carreiras</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active">iFood Card</a>
                            </li>
                        </ul>
                        <div class="navbar_register">
                            <a href="telacadastro" class="mx-5 text-decoration-none" style="color: red;">criar
                                conta</a>
                            <button type="button" class="btn btn-danger mr-5">
                                <a href="telalogin" class="text-decoration-none text-white">Entrar</a>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="text-center mt-5 pt-5 ">
                <h1>Tudo para facilitar seu dia a dia</h1>
                <p>O que você precisa está aqui. Peça e receba onde estiver.</p>
            </div>
            <div class="p-5 text-center">
                <div class="row">
                    <div class="col">
                        <img src="images/pingmap.png" alt="pingmap" width="20px" height="20px">
                        <input type="text" name="pesquisa" id="pesquisa1"
                            placeholder="Endereço de entrega e número" class="w-50 h-5">
                        <button on type="button" class="btn btn-danger">Buscar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="mt-5 mb-5 d-flex flex-column flex-md-row align-items-center justify-content-md-center gap-4">
            <div class="align-items-center justify-content-md-center">
              <a href="estabelecimentos"><img src="images/restaurante.png" alt="imagem restaurante ifood"></a>
            </div>
            <div class=" ">
              <img src="images/mercado.png" alt="imagem mercado ifood">
            </div>
        </div>
        <div class="container">
      <div class="mt-5 mb-5 d-flex flex-column flex-md-row align-items-center justify-content-md-center gap-5">
        <div class="taca">
          <img src="images/taca.png" alt="imagem de uma taça" width="175px">
        </div>
        <div class="farmacia">
          <img src="images/farmacia.png" alt="imagem de uma maleta de médico" width="145px">
        </div>
        <div class="pet-shop">
          <img src="images/petshop.png" alt="imagem de um pote de ração" width="175px">
        </div>
    </div>
    <hr>
    <div class="container">
        <h2>Os melhores restaurantes</h2>
        <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card" style="width: 16.5rem;"><img src="images/mec.png" class="d-block w-100" alt="logo mcdonalds"></div>
                </div>
                <div class="carousel-item">
                    <div class="card" style="width: 16rem;"><img src="images/cocobambu.png" class="d-block w-100" alt="logo cocobambu"></div>
                </div>
                <div class="carousel-item">
                    <div class="card" style="width: 16.8rem;">
                        <img src="images/chinainbox.png" class="d-block w-100" alt="logo chinainbox">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card" style="width: 16.5rem;">
                        <img src="images/habibs.png" class="d-block w-100" alt="logo habibs">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card" style="width: 17rem;">
                        <img src="images/outback.png" class="d-block w-100" alt="logo outback">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-md-center gap-3 pt-5 pb-5">
            <div class="img-responsive">
                <img src="images/banner-3.png" alt="banner-ifood">
            </div>
            <div class="img-responsive">
                <img src="images/banner-2.png" alt="banner-ifood">
            </div>
            <div class="img-responsive">
                <img src="images/banner-1.png" alt="banner-ifood">
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <h2>Os melhores mercados</h2>
        <div class="row justify-content-md-center  pt-4">
            <div class="card" style="width: 18rem;">
                <img src="images/dia.png" class="card-img-top" alt="logo dia">
            </div>
            <div class="card" style="width: 18rem;">
                <img src="images/big.png" class="card-img-top" alt="logo big">
            </div>
            <div class="card" style="width: 18rem;">
                <img src="images/eataly.png" class="card-img-top" alt="logo eataly">
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="d-flex flex-column flex-md-row gap-4 pb-5 justify-content-md-center pt-5 mt-4">
            <img src="images/entregas.png" alt="imagem propaganda cadastro ifood">
            <img src="images/fome-ifood.png" alt="imagem propaganda cadastro ifood">
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-md-center gap-5">
            <div class="d-block pt-5">
                <h2><strong>Você tem <br> fome do <br> quê?</strong></h2>
                <br>
                <p>Descubra como é ser um FoodLover e <br> faça parte da nossa revolução!</p>
                <button type="button" class="btn btn-danger">Saiba mais</button>
            </div>
            <img src="images/ifood-lover-banner.png" alt="banner-ifood">
        </div>
        <div class="d-md-none d-flex flex-column flex-md-row pt-5">
            <img src="images/ifood-benefits-mobile.png" alt="banner-ifood">
        </div>
        <div class="d-none d-lg-block  mt-5 d-flex flex-column flex-md-row justify-content-center">
            <img src="images/ifood-benefits-desktop.png" alt="banner-ifood">
        </div>
    </div>
    <div class="separador">
        <div class="w-100 mt-5 pt-5 pb-3 px-0">
        </div>
    </div>
    <footer>
        <div class="container p-4 pb-0">
            <div class="row">
                <h2 class="fs-5">Explore por cidades</h2>
                <a href="#" class="text-end text-decoration-none text-danger">Ver todas</a>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5">
                    <ul class="list-unstyled mb-0 ">
                        <li><a href="#" class="text-decoration-none text-secondary">Belo Horizonte</a></li>
                        <li><a href="#" class="text-decoration-none text-secondary">Brasília</a></li>
                        <a href="#" class="text-decoration-none text-secondary">
                            <li><a href="#" class="text-decoration-none text-secondary">Campinas</a></li>
                        </a>
                        <a href="#" class="text-decoration-none text-secondary">
                            <li>Curitiba</li>
                        </a>
                        <a href="#" class="text-decoration-none text-secondary">
                            <li>Goiânia</li>
                        </a>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5">
                    <ul class="list-unstyled mb-0">
                        <a href="#" class="text-decoration-none text-secondary">
                            <li>Guarulhos</li>
                        </a>
                        <a href="#" class="text-decoration-none text-secondary">
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
                        <a href="#" class="text-decoration-none text-secondary">
                            <li>Ribeirão Preto</li>
                        </a>
                        <a href="#" class="text-decoration-none text-secondary">
                            <li>Rio de Janeiro</li>
                        </a>
                        <a href="#" class="text-decoration-none text-secondary">
                            <li>Salvador</li>
                        </a>
                        <a href="#" class="text-decoration-none text-secondary">
                            <li>Santo André</li>
                        </a>
                        <a href="#" class="text-decoration-none text-secondary">
                            <li>Santos</li>
                        </a>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5">
                    <ul class="list-unstyled mb-0">
                        <a href="#" class="text-decoration-none text-secondary">
                            <li>São Bernado do Campo</li>
                        </a>
                        <a href="#" class="text-decoration-none text-secondary">
                            <li>São Caetano do Sul</li>
                        </a>
                        <a href="#" class="text-decoration-none text-secondary">
                            <li>São Paulo</li>
                        </a>
                    </ul>
                </div>
                <hr class="mb-4 mt-3">
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5">
                    <h2 class="fs-6 pb-3">iFood</h2>
                    <ul class="list-unstyled mb-0">
                        <a href="#" class="text-decoration-none text-secondary">
                            <li>Site Institucional</li>
                        </a>
                        <a href="#" class="text-decoration-none text-secondary">
                            <li>Fale Conosco</li>
                        </a>
                        <a href="#" class="text-decoration-none text-secondary">
                            <li>Carreiras</li>
                        </a>
                        <a href="#" class="text-decoration-none text-secondary">
                            <li>iFood Colômbia</li>
                        </a>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5">
                    <h2 class="fs-6 pb-3">Descubra</h2>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#" class="text-decoration-none text-secondary">Cadastre seu Restaurante ou
                                Mercado</a></li>
                        <li><a href="#" class="text-decoration-none text-secondary">iFood Shop</a></li>
                        <li><a href="#" class="text-decoration-none text-secondary">iFood Card</a></li>
                        <li><a href="#" class="text-decoration-none text-secondary">blog iFood Empresas</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0 lh-lg mx-5 ">
                    <h2 class="fs-6 pb-3">Social</h2>
                    <a href="#"><img src="images/facebook.png" alt="logo-facebook" width="30px"></a>
                    <a href="#"><img src="images/twitter.png" alt="logo-twitter" width="30px"></a>
                    <a href="#"><img src="images/youtube.png" alt="logo-youtube" width="30px"></a>
                    <a href="#"><img src="images/instagram.png" alt="logo-instagram" width="30px"></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</body>
</html>