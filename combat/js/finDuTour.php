<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
	$pseudoJoueurCo = $_COOKIE['pseudo'];
	$adversaire = $_COOKIE['adversaire'];
	$listeAttaque = $attaque = $bdd->query('SELECT * FROM attaques')->fetchALL();

	$listeJoueurs = $joueursAdverse = $bdd->query('SELECT * FROM joueurs WHERE pseudo="'.$adversaire.'" ')->fetchALL();
	$liste = $joueur = $bdd->query('SELECT * FROM joueurs WHERE pseudo="'.$pseudoJoueurCo.'" ')->fetchALL();
	////////////

	$pokemonActuel = $liste[0][3];
	$attaqueLancee = $liste[0][4];

	$pokemonAdverseActuel = $listeJoueurs[0][3];
	$attaqueEnnemiLancee = $listeJoueurs[0][4];

	foreach ($listeAttaque as $valueee) {
		if($valueee[1] == $attaqueLancee){
			$resultatAttaqueLancee = $valueee[3];
		}
	}
	foreach ($listeAttaque as $key => $valuezz) {
		if($valuezz[1] == $attaqueEnnemiLancee){
			$resultatAttaqueEnnemiLancee = $valuezz[3];
		}
	}

	//////////////////
	$resultatVie = $rechercheVie = $bdd->query('SELECT * FROM pokemon WHERE nom="'.$pokemonActuel.'" AND proprio="'.$pseudoJoueurCo.'"')->fetchALL();
	$resultatVieAdverse = $rechercheVieAdverse = $bdd->query('SELECT * FROM pokemon WHERE nom="'.$pokemonAdverseActuel.'" AND proprio="'.$adversaire.'"')->fetchALL();

	$dmg =  $resultatVieAdverse[0][3] - $resultatAttaqueLancee;

	$degat = $bdd->prepare('UPDATE pokemon SET vie="'.$dmg.'" WHERE nom="'.$pokemonAdverseActuel.'" AND proprio="'.$adversaire.'" ')->execute();


	echo '<p><span style="color:red">'.$resultatVieAdverse[0][1].'</span> inflige <span style="color:blue">'.$resultatAttaqueEnnemiLancee.'</span> points de dégats à <span style="color:green">VOTRE '.$resultatVie[0][1].'</span></br></br>ET</br></br><span style="color:green">VOTRE '.$resultatVie[0][1].'</span> inflige <span style="color:blue">'.$resultatAttaqueLancee.'</span> points de dégats à <span style="color:red"> '.$resultatVieAdverse[0][1].'</span>.</p><script> setTimeout(function(){ $("#pousser").html(""); }, 5000); </script>';

	// echo '<script> setTimeout(function(){ $("#deux").html("<div id=\'textChoix\'><p>Que doit faire '.$pokemonActuel.' ?</p></div><div id=\'choix\' onClick=\'choix();\'><div id=\'choixUn\'><p>ATTAQUE</p></div></div>"); }, 5000);
	// 	 </script>';
	echo '<script> setTimeout(function(){ traitementFinDuTour(); }, 2000);</script>';

	//$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
	$finTour = $bdd->prepare('UPDATE joueurs SET etat="1" WHERE pseudo="'.$pseudoJoueurCo.'" ')->execute();

?>
