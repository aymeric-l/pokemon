<?php 
	$pseudoJoueurCo = $_COOKIE['pseudo'];
	$adversaire = $_COOKIE['adversaire'];
	$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
	$attaqueQuattre = $bdd->query('SELECT * FROM pokemon WHERE proprio="'.$pseudoJoueurCo.'" ');
	$attaqueQuattreResultat = $attaqueQuattre->fetchALL();
	$listeJoueurs = $joueurs = $bdd->query('SELECT * FROM joueurs WHERE pseudo="'.$adversaire.'" ')->fetchALL();
	$pret = $bdd->prepare('UPDATE joueurs SET etat="2" WHERE pseudo="'.$pseudoJoueurCo.'" ')->execute();
	$atk = $attaqueQuattreResultat[0]["attaqueQuattre"];
	$lastAttaque = $bdd->prepare('UPDATE joueurs SET derniereAttaque="'.$atk.'" WHERE pseudo="'.$pseudoJoueurCo.'"')->execute();


	if($listeJoueurs[0][2] == 1){
		echo $listeJoueurs[0][1].' n\'a pas encore joué';
		echo '<script> setTimeout(function(){ attenteQuattre(); }, 1000); </script>';
	}else if($listeJoueurs[0][2] == 2){
		echo 'Vous avez joué tout les deux';
		echo '<script> setTimeout(function(){ actu(); }, 1000); </script>';
	}
?>