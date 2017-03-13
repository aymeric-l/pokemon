<?php 

	$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
	$adversaire = $_COOKIE['adversaire'];
	$adverse = $bdd->query('SELECT * FROM pokemon WHERE proprio="'.$adversaire.'"');
	$listePokemonAdverse = [];
	foreach ($adverse as $valueAdverse) {
	array_push($listePokemonAdverse, $valueAdverse);
}
?>
<div id="nom"><?php echo $listePokemonAdverse[0]['nom']; ?></div>
			<div id="niveau"><?php echo 'Lvl : '.$listePokemonAdverse[0]['niveau']; ?></div>
			<div id="vie"><?php echo 'Pv : '.$listePokemonAdverse[0]['vie']; ?></div>