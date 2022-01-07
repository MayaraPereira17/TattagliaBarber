<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TATTGLIA BARBER</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->

  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
  <link rel="stylesheet" href="estilos.css">

</head>

<body>
  <style>
    body {
      background-color: rgb(8, 8, 8);
    }
  </style>
  <header>
    <nav class="navbar navbar-expand-lg navbar-black">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">

          <i class="fas fa-bars"></i>

        </button>
        <img src="img/logo1.png" width="220" alt="logo do site Maujor" id="imgpos" />
        <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">

          <ul class="navbar-nav mb-2 mb-lg-0">

            <li class="nav-item"><a href="index.php">Home</a></li>
            <li class="nav-item"><a href="produto.php">Produtos</a></li>
            <li class="nav-item"><a href="servico.php">Serviços</a></li>
            <li class="nav-item"><a href="contato.php">Contato</a></li>
            <li class="nav-item"><a href="login.php">Login</a></li>
          </ul>

        </div>
    </nav>


  </header>
  <hr class="my-5" />
  <!--Main layout-->
  <main class="mt-5">
    <div class="container">
      <!--Section: Content-->
      <section>
        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple text-center rounded-6" data-mdb-ripple-color="light">
              <img src="img/logocompleta.jpg" class="w-100 text-center img-fluid" />
              <a href="index.php">
                <div class="mask" style="background-color: rgba(10, 10, 10, 0.137);"></div>
              </a>
            </div>
          </div>

          <div id="offers" class="col-md-6 gx-5 mb-4 mt-6">
            <div class="container">
              <font size="5">
                <p class="text-muted pb-4"><b>
                    Somos uma Barbearia que atende a muitos serviços,trazemos até você qualidade e beleza,
                    estamos no mercado a 1 ano sempre evoluindo.O nome Tattaglia é inspirado em uma escola do seriado
                    "todo mundo odeia o chris", onde que o personagem chris estuda.
                  </b>
                </p>
              </font>
            </div>

          </div>
        </div>
      </section>
      <!--Section: Content-->
      <hr class="my-5" />

      <p class="display-6 fw-bold text-danger mb-0">onde localizamos</p>
      <i class="fas fa-map-marker-alt"><a href="https://www.google.com/maps/place/R.+Fel%C3%ADciano+de+Mendon%C3%A7a,+290+-+Jardim+Sao+Paulo(Zona+Leste),+S%C3%A3o+Paulo+-+SP,+08460-365/@-23.5530837,-46.4017851,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce65086cbc452b:0x486b7277b4725ac3!8m2!3d-23.5530837!4d-46.3995964?hl=pt-BR"> R. Felíciano de Mendonça, 290 - Guaianases, São Paulo - SP, 08460-365</a></i>
      <hr class="my-5" />


      <!--Section: Content-->
      <section class="text-center">
        <h4 class="mb-5 text-white"><strong>O QUE OFERECEMOS</strong></h4>

        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="bg-image hover-overlay ripple rounded" data-mdb-ripple-color="light">
              <img src="img/bar4.jpg" class="img-fluid w-100 " />
              <a href="index.php">
                <div class="mask" style="background-color: rgba(70, 70, 70, 0.15);"></div>
              </a>
            </div>
            <div class="card-body rounded-6">
              <h5 class="card-title text-uppercase fw-bold text-white"> TEMOS BAR</h5>

              <p class="display-6 fw-bold text-danger mb-0">Bar ao final do salão</p>


              <br>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="img/durag.png" class="img-fluid rounded-6 w-100" />
              <a href="index.php">
                <div class="mask" style="background-color: rgba(70, 70, 70, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title text-uppercase fw-bold text-white">Produtos</h5>


              <p class="my-1"><del class="text-muted"> </del> <span class="ms-1 fw-bold text-danger" style="font-size: 35px;">Apartir de R$18,00</span></p>




              <a class="btn btn-danger fw-bold mt-3" href="produto.php" role="button">Ver mais</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="bg-image hover-overlay v ripple" data-mdb-ripple-color="light">
              <img src="img/corte-waves2.jpg" class="img-fluid w-100" />
              <a href="index.php">
                <div class="mask" style="background-color: rgba(70, 70, 70, 0.15);"></div>
              </a>
            </div>
            <div class="card-body rounded">
              <h5 class="card-title text-uppercase fw-bold text-white">Serviços</h5>

              <p class="my-1"><del class="text-muted"> </del> <span class="ms-1 fw-bold text-danger" style="font-size: 35px;">Apartir de R$25,00</span></p>

              <a class="btn btn-danger fw-bold mt-3" href="servico.php" role="button">Ver mais</a>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <hr class="my-5" />


      <!-- Container for demo purpose -->
      <div class="container my-5 py-5 shadow-5">

        <!--Section: Design Block-->
        <section class="text-center text-white">
          <h3 class="mb-5 text-white">EQUIPE TATTGLIA</h3>

          <div class="row">
            <div class="col-md-12 col-lg-4 mb-4">
              <img class="rounded-circle shadow-1-strong mb-4" src="img/mayara.jpeg" alt="avatar" style="width: 150px;" />
              <h5 class="mb-3">Mayara</h5>
              <p class="font-weight-bold text-danger">Designer de Sombrancelha</p>
              <p>
              <ul class="list-unstyled d-flex justify-content-center text-muted mb-0">
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
              <img class="rounded-circle shadow-1-strong mb-4" src="img/moises.jfif" alt="avatar" style="width: 150px;" />
              <h5 class="mb-3">Moises</h5>
              <p class="font-weight-bold text-danger">Cabeleleiro e barbeiro</p>
              <p>

              <ul class="list-unstyled d-flex justify-content-center text-muted mb-0">
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
              <img class="rounded-circle shadow-1-strong mb-4" src="img/davi.jfif" alt="avatar" style="width: 150px;" />
              <h5 class="mb-3">Davi</h5>
              <p class="font-weight-bold text-danger">Barbeiro</p>
              <p>

              <ul class="list-unstyled d-flex justify-content-center text-muted mb-0">
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
              </ul>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
              <img class="rounded-circle shadow-1-strong mb-4" src="img/khawan.jfif" alt="avatar" style="width: 150px;" />
              <h5 class="mb-3">Khawan</h5>
              <p class="font-weight-bold text-danger">Barbeiro</p>
              <p>

              <ul class="list-unstyled d-flex justify-content-center text-muted mb-0">
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>

              </ul>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
              <img class="rounded-circle shadow-1-strong mb-4" src="img/paloma.jfif" alt="avatar" style="width: 150px;" />
              <h5 class="mb-3">Paloma</h5>
              <p class="font-weight-bold text-danger">Cabeleleira</p>
              <p>

              <ul class="list-unstyled d-flex justify-content-center text-muted mb-0">
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
              </ul>
            </div>
          </div>
        </section>
        <!--Section: Design Block-->

      </div>
      <!-- Container for demo purpose -->


      <hr class="my-5" />


</body>

</html>