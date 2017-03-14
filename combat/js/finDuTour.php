<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
	$pseudoJoueurCo = $_COOKIE['pseudo'];
	$adversaire = $_COOKIE['adversaire'];
	$attaque = $bdd->query('SELECT * FROM attaques');
	$listeAttaque = [];
	foreach ($attaque as $valueATK) {
		array_push($listeAttaque, $valueATK);
	}

// 	$combat = $bdd->query('SELECT * FROM pokemon');
// 	$listePokemon = [];
// 	foreach ($combat as $value) {
// 		array_push($listePokemon, $value);
// }

	$joueursAdverse = $bdd->query('SELECT * FROM joueurs WHERE pseudo="'.$adversaire.'" ');
	$joueur = $bdd->query('SELECT * FROM joueurs WHERE pseudo="'.$pseudoJoueurCo.'" ');
	////////////
	$liste = [];
	foreach ($joueur as $valueJoueur) {
		array_push($liste, $valueJoueur);
	}
	$pokemonActuel = $liste[0][3];
	/////////////////
	$listeJoueurs = [];
	foreach ($joueursAdverse as $valueJoueurs) {
		array_push($listeJoueurs, $valueJoueurs);
	}
	$pokemonAdverseActuel = $listeJoueurs[0][3];
	//////////////////
	$rechercheVie = $bdd->query('SELECT * FROM pokemon WHERE nom="'.$pokemonActuel.'" AND proprio="'.$pseudoJoueurCo.'"');
	$rechercheVieAdverse = $bdd->query('SELECT * FROM pokemon WHERE nom="'.$pokemonAdverseActuel.'" AND proprio="'.$adversaire.'"');
	$resultatVieAdverse = [];
		foreach ($rechercheVieAdverse as $valueResultat) {
			array_push($resultatVieAdverse, $valueResultat);
		}
	$resultatVie = [];
		foreach ($rechercheVie as $valueVie) {
			array_push($resultatVie, $valueVie);
		}


	$dmg =  $resultatVieAdverse[0][3] - $listeAttaque[0][3];
	$degat = $bdd->prepare('UPDATE pokemon SET vie="'.$dmg.'" WHERE nom="'.$pokemonAdverseActuel.'" AND proprio="'.$adversaire.'" ')->execute();


	echo '<p><span style="color:red">'.$resultatVieAdverse[0][1].'</span> inflige <span style="color:blue">'.$listeAttaque[0][3].'</span> points de dégats à <span style="color:green">VOTRE '.$resultatVie[0][1].'</span></br></br>ET</br></br><span style="color:green">VOTRE '.$resultatVie[0][1].'</span> inflige <span style="color:blue">'.$listeAttaque[0][3].'</span> points de dégats à <span style="color:red"> '.$resultatVieAdverse[0][1].'</span>.</p><script> setTimeout(function(){ $("#pousser").html(""); }, 5000); </script>';

	echo '<script> setTimeout(function(){ $("#deux").html("<div id=\'textChoix\'><p>Que doit faire '.$pokemonActuel.' ?</p></div><div id=\'choix\' onClick=\'choix();\'><div id=\'choixUn\'><p>ATTAQUE</p></div></div>"); }, 5000);
		 </script>';

	$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
	//$joueurs = $bdd->query('SELECT * FROM joueurs WHERE pseudo="robert" ');
	$finTour = $bdd->prepare('UPDATE joueurs SET etat="1" WHERE pseudo="'.$pseudoJoueurCo.'" ')->execute();
?>
