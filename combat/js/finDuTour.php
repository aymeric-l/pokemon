<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
	
	$attaque = $bdd->query('SELECT * FROM attaques');
	$listeAttaque = [];
	foreach ($attaque as $valueATK) {
		array_push($listeAttaque, $valueATK);
	}

	$combat = $bdd->query('SELECT * FROM pokemon');
	$listePokemon = [];
	foreach ($combat as $value) {
		array_push($listePokemon, $value);
}
	$dmg =  $listePokemon[1][3] - $listeAttaque[0][3];
	$degat = $bdd->prepare('UPDATE pokemon SET vie='.$dmg.' WHERE nom="CARAPUCE"')->execute();

	echo '<script> setTimeout(function(){ $("#pousser").html(""); }, 3000); </script><h2>'.$listePokemon[0][1].' inflige '.$listeAttaque[0][3].' points de dégats à '.$listePokemon[1][1].'.</h2>';

?>
