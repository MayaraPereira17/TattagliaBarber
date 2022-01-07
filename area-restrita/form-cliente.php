 <!--chamar o valida sentinela pegar ,abre um bloco php-->
 <?php include_once("valida-sentinela.php");?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro Cliente</title>
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



          <a href="form-agendamento.php" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-calendar fa-fw me-2"></i><span>Agendamento</span></a>


          <a href="#" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-building fa-fw me-2">   </i><span>Socios</span></a>

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


    <main style="margin-top: 58px">
      <div class="container pt-5">
        <!-- Section: Main chart -->
        <section class="mb-4">
          <div class="card">

            <div class="card-header py-3 align-items-center">

              <h5 class="mb-0 text-center"><strong>Cadastro do Cliente</strong></h5>

            </div>

            <div class="card-body">

              <div class="row">
                <div class=" d-flex align-items-center justify-content-center">
                  <div class="col-md-8 mb-4">
                    <!--Section: Checkout form-->

                    <section class="shadow-5 p-4">

                      <form  method="post" action="cadastra-cliente.php" >
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                          <div class="col">

                          <!--nome do cliente-->
                            <div class="form-outline">
                              <input type="text" id="nomeCliente"  name="nomeCliente" class="form-control"/>
                              <label class="form-label" for="form6Example1" style="margin-left: 0px">Nome</label>
                              <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px"></div>
                                <div class="form-notch-middle" style="width: 68.8px"></div>
                                <div class="form-notch-trailing"></div>
                              </div>
                              <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px"></div>
                                <div class="form-notch-middle" style="width: 68.8px"></div>
                                <div class="form-notch-trailing"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col">

                         <!--Sobrenome do cliente-->
                            <div class="form-outline">
                              <input type="text" id="sobrenomeCliente" name="sobrenomeCliente" class="form-control" autocomplete="off" />
                              <label class="form-label" for="form6Example2" style="margin-left: 0px">Sobrenome</label>
                              <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px"></div>
                                <div class="form-notch-middle" style="width: 68px"></div>
                                <div class="form-notch-trailing"></div>
                              </div>
                              <div class="form-notch">
                                <div class="form-notch-leading" style="width: 9px"></div>
                                <div class="form-notch-middle" style="width: 68px"></div>
                                <div class="form-notch-trailing"></div>
                              </div>
                            </div>
                          </div>
                        </div>

                     <!--cpf do cliente-->
                        <div class="form-outline mb-4">
                          <input type="text" id="cpfCliente"  name="cpfCliente" class="form-control" autocomplete="off" />
                          <label class="form-label" for="form6Example3" style="margin-left: 0px">cpf</label>
                          <div class="form-notch">
                            <div class="form-notch-leading" style="width: 9px"></div>
                            <div class="form-notch-middle" style="width: 98.4px"></div>
                            <div class="form-notch-trailing"></div>
                          </div>
                          <div class="form-notch">
                            <div class="form-notch-leading" style="width: 9px"></div>
                            <div class="form-notch-middle" style="width: 98.4px"></div>
                            <div class="form-notch-trailing"></div>
                          </div>
                        </div>

                        <!-- Numero do Cliente -->
                        <div class="form-outline mb-4">
                          <input type="text" id="telefoneCliente"  name="telefoneCliente" class="form-control" autocomplete="off" />
                          <label class="form-label" for="form6Example3" style="margin-left: 0px">telefone</label>
                          <div class="form-notch">
                            <div class="form-notch-leading" style="width: 9px"></div>
                            <div class="form-notch-middle" style="width: 98.4px"></div>
                            <div class="form-notch-trailing"></div>
                          </div>
                          <div class="form-notch">
                            <div class="form-notch-leading" style="width: 9px"></div>
                            <div class="form-notch-middle" style="width: 98.4px"></div>
                            <div class="form-notch-trailing"></div>
                          </div>
                        </div>



                        <!-- Submit button -->
                        <button type="submit"value="Cadastrar" class="btn btn-black btn-block mb-4">
                          Cadastrar Cliente
                        </button>
                      </form>
                    </section>
                  </div>
                </div>
        </section>
    </main>
  </header>

  <main style="margin-top: 60px">
 <div class="container pt-4">
   <!-- Section: Main chart -->
   <section class="mb-4">
     <div class="card">
       <div class="card-header py-3">
         <h5 class="mb-0 text-center"><strong>Clientes Cadastrados</strong></h5>
       </div>
       <div class="card-body">
       <table class="table">
           <thead>
               <tr>
                   <th>Num</th>
                   <th>Nome</th>
                   <th>Sobrenome</th>
                   <th>CPF</th>
                   <th>Telefone</th>
               </tr>
           </thead>
           <tbody id='resultado'>
             <?php require_once("../classes/Cliente.php"); $cliente = new Cliente();
             $listacliente = $cliente->listar();?>
               <?php foreach ($listacliente as $linha){ ?>
                   <tr>
                       <td><?php echo $linha['idCliente'] ?></td>
                       <td><?php echo $linha['nomeCliente'] ?></td>
                       <td><?php echo $linha['sobrenomeCliente'] ?></td>
                       <td><?php echo $linha['cpfCliente'] ?></td>
                       <td><?php echo $linha['telefoneCliente'] ?></td>
                   </tr>
               <?php } ?>
           </tbody>
       </table>
       </div>
     </div>
   </section>
</body>

</html>