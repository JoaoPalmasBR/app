<?php
	if (session_id()!=null){
		echo "diferente de null";
	}
	else{
		echo "igual a null";
		echo "<br>";
		//session_start();
		//session_regenerate_id();
	}
	print("SESSION ID:".session_id());
?>
<!DOCTYPE html>
<html lang="pt-br">
	<?php include 'header.php'; ?>
		
		
	<?php include 'footer.php'; ?>
</html>