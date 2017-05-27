<?php
    if($_SERVER['SERVER_NAME']=="localhost"){
        $mysqli = new mysqli('localhost', 'root', '', 'app');
    }
    else{
        //$mysqli = new mysqli('localhost', 'root', '', 'app');
        $mysqli = new MySQLi('joaoantoniosantos.com.br','joaoa870_u_notas','joaoantonio2012','joaoa870_notasonline');
    }
?>