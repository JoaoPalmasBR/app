<?php
    session_start();
    $_SESSION['status']=0;
    $_SESSION['usuario']=null;
    $_SESSION['senha']=null;
    if($_SERVER['SERVER_NAME']=="localhost"){
        header ('location: http://localhost/app');
    }else{
        header ('location: http://joaoantoniosantos.com.br/app/');
    }
?>