<?php
    $mensagem=$_POST['mensagem'];
    $id=$_POST['id'];
    $id2=$_POST['id2'];
    $query  = "insert into chat_mensagem (remetente, destinatario, mensagem) values ($id,$id2, '$mensagem');";
    include '../connect.php';
    $mysqli->query($query);
    if($_SERVER['SERVER_NAME']=="localhost"){
        header ('location: http://localhost/app/chat/');        
    }else{
        header ('location: http://joaoantoniosantos.com.br/app/chat/');
    }
?>