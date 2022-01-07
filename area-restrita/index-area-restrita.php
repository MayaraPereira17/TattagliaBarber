 <!--chamar o valida sentinela pegar ,abre um bloco php-->
 <?php

  include_once("valida-sentinela.php");

  ?>
 <!DOCTYPE html>
 <html lang="pt-br">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Administração</title>
 </head>
 <!-- Font Awesome -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
 <!-- Google Fonts -->

 <!-- MDB -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
 <!-- MDB -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
 <link rel="stylesheet" href="restrita.css">

 <body>


   <header>
     <!-- Sidebar -->
     <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">

       <div class="position-sticky">

         <div class="list-group list-group-flush mx-3 mt-4">
           <a href="index-area-restrita.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
             <i class="fas fa-home me-1"></i><span> Home</span>
           </a>

           <a href="form-produto.php" class="list-group-item list-group-item-action py-2 ripple">
             <i class="fas fa-thumbtack me-2"></i><span>Cadastro Produto</span></a>


           <a href="form-servico.php" class="list-group-item list-group-item-action py-2 ripple">
             <i class="fas fa-wrench me-2"></i><span>Cadastro Serviço</span></a>


           <a href="form-cliente.php" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-users fa-fw me-2"></i><span>Cadastro Cliente</span></a>

           <a href="form-agendamento.php" class="list-group-item list-group-item-action py-2 ripple">
             <i class="fas fa-calendar fa-fw me-2"></i><span>Agendamento</span></a>


           <a href="#" class="list-group-item list-group-item-action py-2 ripple">
          <i class="fas fa-building fa-fw me-2"></i><span>Socios</span></a>

           <a href="#" class="list-group-item list-group-item-action py-2 ripple">
          <i class="fas fa-money-bill fa-fw me-2"></i><span>Finaceiro</span></a>

           <a href="../logout.php" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-arrow-circle-left"></i><span> Sair</span></a>

         </div>
       </div>
     </nav>
     <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
       <!-- Container wrapper -->
       <div class="container-fluid">
         <!-- Toggle button -->
         <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
           <i class="fas fa-bars"></i>
         </button>

         <!-- Brand -->
         <a class="navbar-brand" href="#">
           <img src="../img/logo3.png" height="50" alt="" loading="lazy" />
         </a>


         <!-- Right links -->
         <ul class="navbar-nav ms-auto d-flex flex-row">
           <!-- Notification dropdown -->
           <li class="nav-item dropdown">
             <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">


             </a>


             <!-- Avatar -->
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
               <img src="../img/mayara.jpeg" class="rounded-circle" height="22" alt="" loading="lazy" />
             </a>

             <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
               <li><a class="dropdown-item" href="#">sobre adm</a></li>
               <li><a class="dropdown-item" href="../logout.php">sair</a></li>
             </ul>
           </li>
         </ul>
       </div>
       <!-- Container wrapper -->
     </nav>
     <!-- Navbar  -->
   </header>

   <main style="margin-top: 58px">
  <div class="container pt-4">
    <!-- Section: Main chart -->
    <section class="mb-4">
      <div class="card">
        <div class="card-header py-3">
          <h5 class="mb-0 text-center"><strong>BEM-VINDO ADM!!</strong></h5>
        </div>
        <div class="card-body">
          <canvas class="my-4 w-100" id="myChart" height="380"></canvas>
        </div>
      </div>
    </section>
  </div>
   </main>
   


 </body>

 </html>