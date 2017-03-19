<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
	$pseudoJoueurCo = $_COOKIE['pseudo'];
	$adversaire = $_COOKIE['adversaire'];
	$liste = $joueur = $bdd->query('SELECT * FROM joueurs WHERE pseudo="'.$pseudoJoueurCo.'" ')->fetchALL();
	$listeJoueurs = $joueursAdverse = $bdd->query('SELECT * FROM joueurs WHERE pseudo="'.$adversaire.'" ')->fetchALL();
	$pokemonActuel = $liste[0][3];
	$pokemonAdverseActuel = $listeJoueurs[0][3];
	$resultatVie = $rechercheVie = $bdd->query('SELECT * FROM pokemon WHERE nom="'.$pokemonActuel.'" AND proprio="'.$pseudoJoueurCo.'"')->fetchALL();
	$resultatVieAdverse = $rechercheVieAdverse = $bdd->query('SELECT * FROM pokemon WHERE nom="'.$pokemonAdverseActuel.'" AND proprio="'.$adversaire.'"')->fetchALL();
	$victoire = false;

	if($resultatVieAdverse[0][3] > 0){
	echo '<script> setTimeout(function(){ $("#deux").html("<div id=\'textChoix\'><p>Que doit faire '.$pokemonActuel.' ?</p></div><div id=\'choix\' onClick=\'choix();\'><div id=\'choixUn\'><p>ATTAQUE</p></div></div>"); }, 3000);
		 </script>';
		echo 'Vie ennemi : '.$resultatVieAdverse[0][3];
	}else{
		echo '<script> setTimeout(function(){ $("#deux").html("<div id=\'textChoix\'></div><div id=\'choix\'><div id=\'choixUn\'><p>Vous avez gagné !</p></div></div>"); }, 3000);
		 </script>';
		 $victoire = true;
	}

	if($resultatVie[0][3] > 0 AND $victoire == false){
		echo '<script> setTimeout(function(){ $("#deux").html("<div id=\'textChoix\'><p>Que doit faire '.$pokemonActuel.' ?</p></div><div id=\'choix\' onClick=\'choix();\'><div id=\'choixUn\'><p>ATTAQUE</p></div></div>"); }, 3000);
		 </script>';
		 echo 'ma vie : '.$resultatVie[0][3];
	}else if ($resultatVie[0][3] <= 0 AND $victoire == false) {
		echo '<script> setTimeout(function(){ $("#deux").html("<div id=\'textChoix\'></div><div id=\'choix\'><div id=\'choixUn\'><p>Tout vos pokémons sont K.O!</p></div></div>"); }, 3000);
		 </script>';
	}

?>