<?php
session_start();
           if (isset($_SESSION['id'])) {
$id = $_SESSION['id'];}
include_once("conexao.php");

?>
<!doctype html>

<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Agendamento Quadras Poliesportivas</title>
    <link rel="icon" href="img/calendar4-week.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <header data-bs-theme="dark">
      <nav class="navbar navbar-expand-md navbar-info fixed-top bg-info">
        <div class="container-fluid">
          <img src="img/calendar4-week.svg" style="width: 25px; height: 25px; margin-right: 10px; color: white" alt="">
          <a class="navbar-brand" href="#" style="color: black;">Poliesportivo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-5 mb-md-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" style="color: black;" href="index.php">Ínicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" style="color: black;" href="agendamento.php">Agendamento</a>
              </li>
              <li class="nav-item">
              </li>
            </ul>
           <?php 
           if (isset($_SESSION['nome'])) {
            $nome = $_SESSION['nome'];

echo $nome;
?> <p class="invisible">_</p><a href="sair.php" class="btn btn-outline-dark" style="margin-right:5%;">Sair</a><?php
           }
            else{ ?>
            <form class="d-flex" role="search">
              <a href="login.php" class="btn btn-outline-dark" style="margin-right:5%;">Login</a>
              <a href="loginadm.php" class="btn btn-outline-dark" style="margin-right:5%;">Area Restrita</a>
              <a href="escolhalogin.php" class="btn btn-outline-dark">Cadastro</a>
            </form>
            <?php }?>
          </div>
        </div>
      </nav>
    </header>

<main>

  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slide1.svg" alt="Erro">
        <div class="container">
          <div class="carousel-caption text-start text-light">
            <h1>Verifique agora a disponilidade de nossas quadras</h1>
            <p class="opacity-75">Aqui temos a melhor qualidade em nossas quadras</p>
            <p><a class="btn btn-lg text-light btn-info " href="agendatemporeal.php">Saiba mais</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slide2.svg" alt="Erro">
        <div class="container">
          <div class="carousel-caption text-light">
            <h1>Agende um horário</h1>
            <p>Se cuidar é sempre importante, por isso pratique esportes.</p>
            <p><a class="btn btn-lg btn-info text-light" href="agendamento.php">Saiba mais</a></p>
          </div>
        </div>
      </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo</span>
    </button>
  </div>

  <br><br>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="img/foto1.svg" style="width: 50%;  height: 50%; border-radius: 20%;"  alt="Erro">
        <br><br>
        <h2 class="fw-normal">Escolha a Quadra</h2>
        <p>Escolha nossas quadras disponiveis para agendamento</p>
      </div>
      <div class="col-lg-4">
        <img src="img/foto2.svg" style="width: 50%;  height: 50%; border-radius: 20%;"  alt="Erro">
        <br><br>
        <h2 class="fw-normal">Escolha seu horário</h2>
        <p>Cada quadra possui a sua agenda completa, basta escolher o dia que você preferir</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="img/foto3.svg" style="width: 50%;  height: 50%; border-radius: 20%;"  alt="Erro">
        <br><br>
        <h2 class="fw-normal">Agende e Aproveite!</h2>
        <p>Facíl né? Agora é partir para o aquecimento e dar um show na partida</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Quadra Poliesportiva 1</h2>
        <p class="lead" style="text-align: justify;">Geralmente recomendada para esportes como basquetebol e handebol, Aqui no nosso site de agendamentos fazemos o melhor agendamento para você!</p>
      <br>
      <button class="btn btn-lg text-light btn-info"><a href="agendamento.php" style="text-decoration: none;" class="text-light">Agende seu horário</a></button>
      <br>
      <br>
        <button class="btn btn-lg text-light btn-info"><a href="agendatemporeal.php" style="text-decoration: none;" class="text-light">Verificar disponilidade em tempo real</a></button>
      </div>
      <div class="col-md-5">
        <img src="img/quadra1.svg" style="width: 100%; height: 100%;" alt="Erro">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Quadra Poliesportiva 2</h2>
        <p class="lead" style="text-align: justify;">Geralmente recomendada para esportes como futebol e vôleibol, Aqui no nosso site de agendamentos fazemos o melhor agendamento para você!</p>
        <br>
        <button class="btn btn-lg text-light btn-info"><a href="agendamento.php" style="text-decoration: none;" class="text-light">Agende seu horário</a></button>
      <br>
      <br>
      <button class="btn btn-lg text-light btn-info"><a href="agendatemporeal.php" style="text-decoration: none;" class="text-light">Verificar disponilidade em tempo real</a></button>

      </div>
      <div class="col-md-5">
        <img src="img/quadra2.svg" style="width: 100%; height: 100%;" alt="Erro">
      </div>
    </div>



    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
        </a>
        <span class="mb-3 mb-md-0 text-body-secondary">&copy; Site Agendamentos</span>
      </div>
     
  
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
      </ul>
    </footer>
  </div>
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
