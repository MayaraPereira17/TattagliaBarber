<?php
    require_once('../classes/Agenda.php');
    require_once('../classes/Servico.php');
    require_once('../classes/Cliente.php');

     header("Location: form-agendamento.php");

    $agenda = new Agenda();
    $cliente = new Cliente();
    $servico= new Servico();

    $idCliente = $cliente->getIdByName($_POST['nomeCliente']);
    $idServico = $servico->getIdByName($_POST['nomeServico']);
    $cliente->setIdCliente($idCliente);
    $servico->setIdServico($idServico);


    $agenda->setCliente($cliente);
    $agenda->setServico($servico);
    $agenda->setDataAgenda($_POST['dataAgendamento']);  
 

    $agenda->cadastrar($agenda,$idCliente,$idServico);
        
?>