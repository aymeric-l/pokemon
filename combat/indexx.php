	<?php 
$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
if(!isset($_COOKIE['pseudo'])){$pseudoJoueurCo = 'bug';}
else{$pseudoJoueurCo = $_COOKIE['pseudo'];}
$adversaire = $_COOKIE['adversaire'];
$listePokemon = $combat = $bdd->query('SELECT * FROM pokemon WHERE proprio="'.$pseudoJoueurCo.'"')->fetchALL();
$listePokemonAdverse = $adverse = $bdd->query('SELECT * FROM pokemon WHERE proprio="'.$adversaire.'"')->fetchALL();

$listeAttaque = $attaque = $bdd->query('SELECT * FROM attaques')->fetchALL();

?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>Combat pokemon</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"></link>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<meta charset="utf-8">
	
</head>
<body> -->
<?php if($pseudoJoueurCo == 'bug'){header('Location: index.php');} ?>
<div id="contenaire">

<div id="un">
<div id="unUn">
	<div id="pousser"></div>
		<div id="infoEnnemi">
		<?php include('js/combatActuelEnnemi.php'); ?>
		</div>
		<div id="ennemi"><?= '<img src="pokemon/'.$listePokemonAdverse[0][1].'.png"></div>'; ?>
	</div>
	<div id="unDeux">
		<div id="pokemon"><?= '<img src="pokemon/'.$listePokemon[0][1].'DOS.png"></div>'; ?>
		<div id="info">
		<?php include('js/combatActuel.php'); ?>
		</div>
	</div>

</div>

<div id="deux">
	<div id="textChoix">
	<?php if($listePokemon[0][3] > 0){
		echo '<p>Que doit faire '.$listePokemon[0][1].' ?</p>';
	}
	?>
	</div>
	<div id="choix">
	<?php if($listePokemon[0][3] <= 0){
		echo 'Vos pokémon sont K.O.</br>Veuillez contacter un administrateur pour les soigner !';
	}else {
		echo '<div id="choixUn">';
		echo '<p>ATTAQUE</p>';
		echo '</div>';
	}?>
	</div>
</div>

</div>
<?php include('js/script.php'); ?>
<!-- </body>
</html> -->
<?php //header('index.php'); ?>