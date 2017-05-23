<?php
    class Login{
        public $usuario;
        public $senha;
        public $id_sessao;
    }
    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];

    session_start();
    $_SESSION['usuario']=$usuario;
    $_SESSION['senha']=$senha;
    
    echo "post usuario: ".$usuario."<br>";
    echo "post senha: ".$senha."<br>";
    echo "session usuario: ".$_SESSION['usuario']."<br>";
    echo "session senha: ".$_SESSION['senha']."<br>";

    session_regenerate_id();
    $login=new Login();
    $login->usuario=$usuario;
    $login->senha=$senha;
    $login->id_sessao=session_id();
    $_SESSION['login']=$login;
    $_SESSION['id_sessao']=$id_sessao;

    echo 'Login {Usuario: '.$login->usuario.', Senha: '.$login->senha.', Id_Session:'.$login->id_sessao.'}';
?>