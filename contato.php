<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato</title>
  
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
        background-color:#100E0E;
      
    }
  </style>


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
          <li class="nav-item"><a href="login.php">Login</a></li>
        </ul>



      </div>
  </nav>
  <br>

  <center>
    <h1 class="mb-5 text-white"><strong>CONTATO</strong></h1> 
  </center>
  <hr class="my-4" />
  <div class="container my-0 py-0">

        <!--Section: Design Block-->
        <section class="text-center text-white">
          <form>
            <div class="row ">
              <div class="col-lg-5">
                <p class="text-center mt-lg-4 mb-4"><strong>Fale conosco</strong></p>
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1" class="form-control" />
                  <label class="form-label text-muted" for="form3Example1">Name</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example2" class="form-control" />
                  <label class="form-label text-muted" for="form3Example2">Email</label>
                </div>
                <div class="form-outline mb-4">
                  <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                  <label class="form-label text-muted" for="form4Example3">Message</label>
                </div>
                <div class="text-center pb-3">
                  <button type="submit" class="btn btn-danger btn-block mb-5 mb-md-0">
                    enviar
                  </button>
                </div>
              </div>  
              
            </div>
          </form>

        </section>
        <!--Section: Design Block-->

      </div>
      <!-- Container for demo purpose -->
    </div>
  </main>


</body>

</html>