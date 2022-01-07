<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleproduto.css">
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  
/>
<!-- Google Fonts -->

<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/fo..." integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    
<style>
      body {
        background-color:#100E0E;
      }
    </style>
 
</head>

<body>


      
    

      <nav class="navbar navbar-expand-lg navbar-black">
         <div class="container-fluid"> 
             <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarCenteredExample"
      aria-controls="navbarCenteredExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
   
      <i class="fas fa-bars"></i>
      
    </button>
     <img src="img/logo1.png" width="220"  alt="logo do site Maujor" id="imgpos" />
    <div
      class="collapse navbar-collapse justify-content-center"
      id="navbarCenteredExample"
    >
    
                 <ul  class="navbar-nav mb-2 mb-lg-0" >
                 
                    <li class="nav-item"><a href="index.php">Home</a></li>
                    <li class="nav-item"><a href="servico.php">Serviços</a></li>
                    <li class="nav-item" ><a href="contato.php">Contato</a></li>
                    <li class="nav-item"><a href="login.php">Login</a></li>
                 </ul>
                 
            
             
         </div>
         </nav>
         <br>
    <br>
 
    <center> <h2 class="mb-5 text-white" ><strong> NOSSOS PRODUTOS</strong></h2></center>
    <hr class="my-5" />
     <!-- Container para todos os serviços-->
     <div class="container1 mb-5 mt-5">
            <div class="row">
                    <?php 
                    require_once("classes/Produto.php");
                    $produto = new Produto();
                     $listaproduto = $produto->listar();
                
                    
                    foreach ($listaproduto as $linha){ ?>
                                <div class="card" style="width: 18rem;" background = "black" >
                                            <img class="card-img-top" src="area-restrita/<?php echo $linha['fotoProduto'] ?>" alt=""  >
                                    <div class="card-body">
                                            <h3 class="card-text"><?php echo $linha['textoProduto'] ?></h3>
                                            <h2 class="card-title"><?php echo $linha['descProduto'] ?></h2>
                                    </div>
                                </div>
                    <?php }?>
            </div>
    </div>

</body>

</html>