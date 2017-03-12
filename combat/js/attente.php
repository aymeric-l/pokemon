<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
	$joueurs = $bdd->query('SELECT * FROM joueurs WHERE pseudo="robert" ');
	$listeJoueurs = [];
	foreach ($joueurs as $valueJoueurs) {
		array_push($listeJoueurs, $valueJoueurs);
	}
	if($listeJoueurs[0][2] == 1){
		echo $listeJoueurs[0][1].' n\'a pas encore joué';
		echo '<script> setTimeout(function(){ attente(); }, 3000); </script>';
	}else if($listeJoueurs[0][2] == 2){
		echo 'Vous avez joué tout les deux';
		echo '<script> setTimeout(function(){ actu(); }, 1000); </script>';
	}
?>