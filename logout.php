<?php
     session_start();
     unset($_SESSION['login-session']);
     unset($_SESSION['senha-session']);

     session_destroy();

     //volta para a index inicial
     header("Location: index.php");
     


?>