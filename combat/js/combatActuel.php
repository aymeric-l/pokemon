<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
	$pseudoJoueurCo = $_COOKIE['pseudo'];
	$combat = $bdd->query('SELECT * FROM pokemon WHERE proprio="'.$pseudoJoueurCo.'"');
	$listePokemon = [];
	foreach ($combat as $value) {
	array_push($listePokemon, $value);
}
?>

			<div id="nom"><?php echo $listePokemon[0]['nom']; ?></div>
			<div id="niveau"><?php echo 'Lvl : '.$listePokemon[0]['niveau']; ?></div>
			<div id="vie"><?php echo 'Pv : '.$listePokemon[0]['vie']; ?></div>
