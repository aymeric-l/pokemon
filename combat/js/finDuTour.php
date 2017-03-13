<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
	$pseudoJoueurCo = $_COOKIE['pseudo'];
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

	echo '<h2>'.$listePokemon[0][1].' inflige '.$listeAttaque[0][3].' points de dégats à '.$listePokemon[1][1].'.</h2><script> setTimeout(function(){ $("#pousser").html(""); }, 2000); </script>';

	echo '<script> setTimeout(function(){ $("#deux").html("<div id=\'textChoix\'><p>Que doit faire SALAMECHE ?</p></div><div id=\'choix\' onClick=\'choix();\'><div id=\'choixUn\'><p>ATTAQUE</p></div></div>"); }, 3000);
		 </script>';

	$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
	//$joueurs = $bdd->query('SELECT * FROM joueurs WHERE pseudo="robert" ');
	$finTour = $bdd->prepare('UPDATE joueurs SET etat="1" WHERE pseudo="'.$pseudoJoueurCo.'" ')->execute();
?>
