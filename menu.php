<?php
	echo 
		'<nav>
			<ul>
				';
	if ($_SESSION['status']==1){
		echo '<li><a href="';include 'servidor.php';echo '">Inicio</a></li>';
		echo '<li><a href="';include 'servidor.php';echo 'chat/">Chat</a></li>';
		echo 
			'<li>
				<a>Conta</a>
				<ul>
					<li><a href="';include 'servidor.php';echo 'conta/">Dados</a></li>
					<li><a href="';include 'servidor.php';echo 'sair.php">Sair</a></li>
					
				</ul>
			</li>';
	}
	else{
		echo '<li><a href="';include 'servidor.php';echo '">Inicio</a></li>';
		echo '<li><a href="';include 'servidor.php';echo 'login.php">Login</a></li>';
	}
	echo 
		'	</ul>
		</nav>';
?>