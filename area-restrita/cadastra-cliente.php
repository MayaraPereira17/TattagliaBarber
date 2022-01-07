<?php

    header("Location: form-cliente.php");
    
    require_once("../classes/Cliente.php");

    //criar objeto
    //java: Cliente cliente = new Cliente();

    $cliente = new Cliente();
    
    $cliente->setNomeCliente($_POST['nomeCliente']);
    $cliente->setSobrenomeCliente($_POST['sobrenomeCliente']);
    $cliente->setCpfCliente($_POST['cpfCliente']);
    $cliente->setTelefoneCliente($_POST['telefoneCliente']);

    echo("<br>");
    echo ($cliente->cadastrar($cliente));
    
    
?>