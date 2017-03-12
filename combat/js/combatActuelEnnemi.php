<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
	$combat = $bdd->query('SELECT * FROM pokemon');
	$listePokemon = [];
	foreach ($combat as $value) {
	array_push($listePokemon, $value);
}
?>
<div id="nom"><?php echo $listePokemon[1]['nom']; ?></div>
			<div id="niveau"><?php echo 'Lvl : '.$listePokemon[1]['niveau']; ?></div>
			<div id="vie"><?php echo 'Pv : '.$listePokemon[1]['vie']; ?></div>