<!DOCTYPE html>
 <?php include_once("valida-sentinela.php");?>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Serviço</title>
        <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->

  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
  <link rel="stylesheet" href="restrita.css">
    </head>
    <body>
  
<header>
  <!-- Sidebar -->
  <nav
       id="sidebarMenu"
       class="collapse d-lg-block sidebar collapse bg-white"
       >
     
    <div class="position-sticky">
   
      <div class="list-group list-group-flush mx-3 mt-4">
        <a
           href="index-area-restrita.php"
           class="list-group-item list-group-item-action py-2 ripple"
           aria-current="true"
           >
          <i class="fas fa-home me-1"></i
            ><span> Home</span>
        </a>
       
    
         <a href="form-produto.php" class="list-group-item list-group-item-action py-2 ripple">
         <i class="fas fa-thumbtack me-2"></i><span>Cadastro Produto</span></a>
          
          <a
           href="form-cliente.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-users fa-fw me-2"></i><span>Cadastro Cliente</span></a
          >
          <a
           href="form-agendamento.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-calendar fa-fw me-2"></i
          ><span>Agendamento</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-building fa-fw me-2"></i
          ><span>Socios</span></a
          >
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-money-bill fa-fw me-2"></i><span>Finaceiro</span></a
          >
          <a
           href="../logout.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-arrow-circle-left"></i><span> Sair</span></a
          >
       
      </div>
    </div>
  </nav>




  <nav
       id="main-navbar"
       class="navbar navbar-expand-lg navbar-light bg-white fixed-top"
       >
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#sidebarMenu"
              aria-controls="sidebarMenu"
              aria-expanded="false"
              aria-label="Toggle navigation"
              >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <img
             src="../img/logo3.png"
             height="50"
             alt=""
             loading="lazy"
             /> 
      </a>
     

      <!-- Right links -->
      <ul class="navbar-nav ms-auto d-flex flex-row">
        <!-- Notification dropdown -->
        <li class="nav-item dropdown">
          <a
             class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
             href="#"
             id="navbarDropdownMenuLink"
             role="button"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
             >
           
            
          </a>
  

        <!-- Avatar -->
        <li class="nav-item dropdown">
          <a
             class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
             href="#"
             id="navbarDropdownMenuLink"
             role="button"
             data-mdb-toggle="dropdown"
             aria-expanded="false"
             >
            <img
                 src="../img/mayara.jpeg"
                 class="rounded-circle"
                 height="22"
                 alt=""
                 loading="lazy"
                 />
          </a>
         
          <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdownMenuLink"
              >
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


       
           <!-- Section: Main chart -->
          <main style="margin-top: 58px">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Cadastrar Serviço</strong></h5>
          </div>
          <div class="card-body">
          <!-- o form vai aqui-->
          <div class=" d-flex align-items-center justify-content-center">
              <form method="post"
              action="cadastrar-servico.php"
              enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" name="textoServico" id="textoServico" class="form-control" />
                  <label class="form-label" for="form1Example1">Nome do Serviço</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="text" name="descServico" id="descServico" class="form-control" />
                  <label class="form-label" for="form1Example2">Descrição do Serviço</label>
                </div>

                <!-- Selecionar Arquivos -->
                
                <label for="formFileMultiple" class="form-label">Selecione um arquivo</label>
                <input class="form-control" type="file" name="fotoServico" id="fotoServico" multiple />

                <br>

                <!-- Submit button -->
                <button type="submit" value ="cadastrar" class="btn btn-black btn-block" >Enviar</button>
              </form>
              <?php

            require_once("../classes/Servico.php");
            try {
                $servico = new Servico();
                $listaservico = $servico->listar();
                
            } catch(Exception $e) {
                // echo '<pre>';
                //     print_r($e);
                // echo '</pre>';
                echo $e->getMessage();
            }
        ?>
       
            </div>

          </div>
        </div>
      </section>
     
    
    </div>
  </main>


  <main style="margin-top: 60px">
  <div class="container pt-4">
    <!-- Section: Main chart -->
    <section class="mb-4">
      <div class="card">
        <div class="card-header py-3">
          <h5 class="mb-0 text-center"><strong>Lista de Serviços Cadastrados</strong></h5>
        </div>
        <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Num</th>
                    <th>Texto</th>
                    <th>Descrição</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody id='resultado'>
                <?php foreach ($listaservico as $linha){ ?>
                    <tr>
                        <td><?php echo $linha['idservico'] ?></td>
                        <td><?php echo $linha['textoservico'] ?></td>
                        <td><?php echo $linha['descservico'] ?></td>
                        <td><img src=" <?php echo $linha['fotosevico'] ?> " width="100px"></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
      </div>
    </section>
                </main> 
    </body>
</html>