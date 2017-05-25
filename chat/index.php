<?php
    session_start();
    if ($_SESSION['status']==1){
        echo "logado";
    }else{
        echo "nao logado";
    }
    $id=1;
    $id2=2;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="../estilo.css">
    </head>
	<?php include '../header.php'; ?>
    <?php
        include '../connect.php';
        echo '<section style="width: 90%;margin:0 auto;">';
        echo "<center><h3>Chat do $id com $id2</h3></center>";
        echo '<ul style="border:1px solid black;padding:5px;border-radius: 10px;">';
        $query  = "SELECT * FROM chat where remetente=$id or destinatario=$id";
        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                if ($row['remetente']==$id){
                    echo '<li type="none" style="text-align:right;"><a style="font-size:130%;border-bottom:1px solid black;border-radius: 10px;">'.$row['mensagem'].'</a></li>';
                }else{
                    echo '<li type="none" style="text-align:left;"><a style="font-size:130%;border-bottom:1px solid black;border-radius: 10px;">'.$row['mensagem'].'</a></li>';
                }
                
            }
        }
        echo '<form method="POST" action="envia.php">';
            echo '<li type="none" style="text-align:center;">';
                echo '<input name="mensagem" type="text" placeholder="Mensagem" style="font-size:130%;width:80%;border-radius:10px;" autocomplete="off">';
                echo '<input name="id" value="'.$id.'" hidden>';
                echo '<input name="id2" value="'.$id2.'" hidden>';
                echo '<input type="submit" value"Enviar" style="width:20%;border-radius:10px;">';
            echo '</li>';
        echo '</form>';
        echo '</ul>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '</section>';
    ?>
	<?php include '../footer.php'; ?>
</html>