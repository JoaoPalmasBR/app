<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Notas Online V.2</title>
		<meta name="description" content="Calculadora de Notas de Escola/Faculdade.">
		<meta name="author" content="Joao Antonio Santos">
		<link rel="shortcut icon" href="img/logo.png" type="image/png">
		<link rel="stylesheet" type="text/css" href="estilo.css">
    
	
	<style type="text/css">
		a.instituicao{
			text-decoration: none;
			color: white;
			width: 100%;
			border-bottom: 1px solid white;
		}
		li.instituicao1{
			height:50px;
			width:100%;
		}
		li.instituicao1:hover{
			background-color: gray;
		}
	</style>
</head>
<body>
<?php
	//include 'Classes.php';
	include 'header.php';
	echo 
	'<br>
	<fieldset class="fielsetIndex">
		<center>';
			if(empty($_SESSION['usuario'])){
				echo "Bem Vindo Visitante";
			}
			else{
				echo 'Bem Vindo '.$_SESSION['nome'];
			}
			echo "<br><br>";
			echo "<a>Instituicao:</a>";
			echo "<ul>";
			include 'connect.php';
			$query  = "SELECT instituicao FROM aluno GROUP BY instituicao ORDER BY instituicao ASC";
			if ($result = $mysqli->query($query)) {
				while ($row = $result->fetch_assoc()) {
					echo '<li class="instituicao1"><a class="instituicao" href="';include 'servidor.php';echo 'calcula.php?i='.$row['instituicao'].'">'.$row['instituicao'].'</a></li>';
				}
			}
		?>
		</ul>
	</center>
</fieldset>
<?php include 'footer.php'; ?>
</body>
</html>