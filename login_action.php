<?php
    session_start();
    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];

    $_SESSION['usuario']=$usuario;
    $_SESSION['senha']=$senha;
    $_SESSION['status']=1;
    
    //echo "post usuario: ".$usuario."<br>";
    //echo "post senha: ".$senha."<br>";
    //echo "session usuario: ".$_SESSION['usuario']."<br>";
    //echo "session senha: ".$_SESSION['senha']."<br>";
    
    //echo 'Login {Usuario: '.$login->usuario.', Senha: '.$login->senha.', Id_Session:'.$login->id_sessao.'}';
    //print("SESSION ID:".session_id());
    if($_SERVER['SERVER_NAME']=="localhost"){
        header ('location: http://localhost/app');
    }else{
        header ('location: http://joaoantoniosantos.com.br/app/');
    }
?>