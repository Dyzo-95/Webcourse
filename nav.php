<?php
session_start();

?>
<header>
	
	<nav>
		<ul class="ul1">
			<div class"Logo">
				<a href="index.php"><img src="assets/img/Logo.png" width="150px" alt="Logo"></a>
			</div>
			<ul class="ul2">
			<li><a href="index.php" class="active">Acceuil</a></li>
            <li><a href="QSN.php">Qui sommes-nous ?</a></li>
            <li><a href="Calendrier.php">Calendrier évènementiel</a></li>
            <li><a href="Club.php">Informations Club</a></li>			
			<li><a href="Contact.php">Contact</a></li>
			<?php if(isset($_SESSION["username"])){
				echo '<li class="dropdown"><a href="deconnexion.php">Deconnexion</a></li>
				<li><a href="choix.php">Inscription Evenement</a></li>';
			} else {
				echo '
				<li class="dropdown"><a href="Nvlicencier.php">Inscription Membre </a>
				
			</li>
            <li class="dropdown"><a href="Inscrit.php">Connexion Membre</a></li>
				';
			}
			?>
		</ul>
		<ul class="dropdown-content">
					<li><a href="Evenement.php">Inscription Coureur</a></li>
				</ul>
	</nav>	
	<!--<li><a href="Evenement.php">Inscription Coureur</a></li>-->
</header>
