<?php
    //criando as variaveis 
    $login = $_POST['username'];
    $senha = $_POST['password'];


   
    if(($login == 'adm') && ($senha == '123')){
    
            session_start();
            
           $_SESSION['login-session']=$login;
           $_SESSION['senha-session']=$senha;

    
           header("Location: area-restrita/index-area-restrita.php");

    }
    else{
      
        header("Location:login.php");
    }


?>