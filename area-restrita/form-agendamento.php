 <!--chamar o valida sentinela pegar ,abre um bloco php-->
 <?php include_once("valida-sentinela.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produto</title>
    <link rel="stylesheet" href="restrita.css">
        <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->

  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
 
  <link rel="stylesheet" href="agendamento.css">
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
           aria-current="true" >
          <i class="fas fa-home me-1"></i ><span> Home</span>


        </a>
        <a href="form-produto.php" class="list-group-item list-group-item-action py-2 ripple">
        <i class="fas fa-thumbtack me-2"></i><span>Cadastro Produto</span></a>
    
          <a
           href="form-servico.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-wrench me-2"></i
          ><span>Cadastro Serviço</span></a
          >
          <a
           href="form-cliente.php"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-users fa-fw me-2"></i><span>Cadastro Cliente</span></a
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


<main style="margin-top: 58px">
  <div class="container pt-5">
    <!-- Section: Main chart -->
    <section class="mb-4">
      <div class="card">
        <div class="card-header py-3">
          <h5 class="mb-0 text-center"><strong>Agendamento</strong></h5>
        </div>

          
        <div class="card mx-5 my-5 px-5 py-5-center">
  <form id="main" class="form-horizontal" action="cadastrar-agenda.php" method="post" novalidate>
  
  <!--Nome do Cliente -->
    <div class="form-group row mb-0">
      <div class="col-sm-8 md-form px-0">
      <label class="control-label" for="username">Nome cliente</label>
        <select name="nomeCliente">
                <?php
                require_once("../classes/Cliente.php");
                $cliente= new Cliente();
                $listacliente = $cliente->listar();
                    foreach($listacliente as $linha){
                        echo("<option value='". $linha['nomeCliente']."'>".
                            $linha['nomeCliente']."</option>");
                    }
                ?>
            </select>
      </div>
      <div class="col-sm-4 messages">
      </div>
    </div>
    
    
    
    

     <!--Tipo do Serviço-->
    <div class="form-group row mb-0">
      <div class="col-sm-8 px-0">
      <label class="mdb-select md-form" >Tipo de Serviço</label>
      <select name="nomeServico">
                <?php 
                 require_once("../classes/Servico.php");
                 $servico= new Servico();
                 $listaservico = $servico->listar();
                foreach($listaservico as $linhaServ){ 
                  echo("<option value='".$linhaServ['textoservico']."'>".
                  $linhaServ['textoservico']."</option>");
                }
                 ?>
            </select>
            <br>
      </div>
      <div class="col-sm-4 messages"></div>
    </div>

  
    <!--Data do agendamento -->
    <div class="form-group row mb-0">
      <div class="col-sm-8 md-form px-0">
      <label class="control-label" for="birthdate">Data</label>
        <input id="dataAgendamento" class="form-control" type="datetime-local" placeholder="YYYY-MM-DD" name="dataAgendamento">
      </div>
      <div class="col-sm-4 messages"></div>
    </div>
    
     <br>
      

      <!--Botão de Agendamento -->
    <div class="form-group">
        <button type="submit" class="btn btn-dark">Agendar</button>
    </div>
  </form>
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
          <h5 class="mb-0 text-center"><strong> Agendados</strong></h5>
        </div>
        <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome cliente</th>
                    <th>Tipo Serviço</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody id='resultado'>
                <?php 
                require_once('../classes/Agenda.php');
                require_once('../classes/Cliente.php');
                require_once('../classes/Servico.php');

                $agenda= new Agenda();
                $cliente= new Cliente();
                $servico= new Servico();

                $listaAgendamento= $agenda->listar();
                foreach ($listaAgendamento as $linha){ ?>
                    <tr>
                    <td><?php echo $cliente->getNameById($linha['idCliente']); ?></td>
                    <td><?php echo $servico->getNameById($linha['idServico']); ?></td>
                    <td><?php echo $linha['dataAgenda'] ?></td>
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