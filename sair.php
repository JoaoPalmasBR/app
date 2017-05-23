<?php
    //session_start();
    //session_regenerate_id();
    unset($_SESSION['login']);
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    unset($_SESSION['id_sessao']);
    session_destroy();
    //variaveis $_SESSION[''];
    header ('location: http://localhost/app/');
?>