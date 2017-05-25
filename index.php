<?php
	session_start();
    if ($_SESSION['status']==1){
        echo "logado";
    }else{
        echo "nao logado";
        }
?>
<!DOCTYPE html>
<html lang="pt-br">
	<?php include 'header.php'; ?>
		
		
	<?php include 'footer.php'; ?>
</html>