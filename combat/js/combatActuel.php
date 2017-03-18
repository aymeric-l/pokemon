<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
	$pseudoJoueurCo = $_COOKIE['pseudo'];
	$listePokemon = $combat = $bdd->query('SELECT * FROM pokemon WHERE proprio="'.$pseudoJoueurCo.'"')->fetchALL();
?>

			<div id="nom"><?php echo $listePokemon[0]['nom']; ?></div>
			<div id="niveau"><?php echo 'Lvl : '.$listePokemon[0]['niveau']; ?></div>
			<div id="vie"><?php 
			//echo 'Pv : '.$listePokemon[0]['vie']; 
			echo '<progress style="width:100px; color:green;" value="'.$listePokemon[0]["vie"].'" max="'.$listePokemon[0]['vieMax'].'"></progress>';
			?></div>
