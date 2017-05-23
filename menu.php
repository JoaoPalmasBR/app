<?php
    /*echo "<ul>";
    
    echo '<li><a href="';include 'servidor.php';echo '">Inicio</a></li>';
				if(empty($_SESSION['usuario'])){
					echo '<li><a href="';include 'servidor.php';echo 'conta/login.php">Login</a></li></ul>';
				}
				else{
					echo '<li class="dropdown">';
						echo '<a href="javascript:void(0)" class="dropbtn">Conta</a>';
						echo '<div class="dropdown-content">';
							echo '<a href="';include 'servidor.php';echo 'conta/">Dados</a>';
							echo '<a href="';include 'servidor.php';echo 'conta/historico.php">Historico</a>';
							echo '<a href="';include 'servidor.php';echo 'conta/sair.php">Sair</a>';
						echo '</div>';
					echo '</li>';
				}
			
		</ul>*/
?>
<nav>
    <ul>
        <li>
			<a href="http://localhost/app/">Inicio</a>
			<ul>
				<li><a href="presentation.html">presentation</a></li>
				<li><a href="contact.html">contact</a></li>
			</ul>
		</li>
        <li><a href="http://localhost/app/login">Login</a></li>
        <li><a href="http://localhost/app/">News</a></li>
    </ul>
</nav>
