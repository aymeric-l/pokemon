	<?php 
$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
$pseudoJoueurCo = $_COOKIE['pseudo'];
$adversaire = $_COOKIE['adversaire'];
$combat = $bdd->query('SELECT * FROM pokemon WHERE proprio="'.$pseudoJoueurCo.'"');
$adverse = $bdd->query('SELECT * FROM pokemon WHERE proprio="'.$adversaire.'"');
$listePokemon = [];
foreach ($combat as $value) {
	array_push($listePokemon, $value);
}

$listePokemonAdverse = [];
foreach ($adverse as $valueAdverse) {
	array_push($listePokemonAdverse, $valueAdverse);
}

$attaque = $bdd->query('SELECT * FROM attaques');
$listeAttaque = [];
foreach ($attaque as $valueATK) {
	array_push($listeAttaque, $valueATK);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Combat pokemon</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"></link>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<meta charset="utf-8">
	
</head>
<body>

<div id="contenaire">

<div id="un">
<div id="unUn">
	<div id="pousser"><?php echo $_COOKIE['pseudo'].' VS '.$_COOKIE['adversaire']; ?></div>
		<div id="infoEnnemi">
		<?php include('js/combatActuelEnnemi.php'); ?>
		</div>
		<div id="ennemi"><?php echo '<img src="pokemon/'.$listePokemonAdverse[0][1].'.png"></div>'; ?>
	</div>
	<div id="unDeux">
		<div id="pokemon"><?php echo '<img src="pokemon/'.$listePokemon[0][1].'.png"></div>'; ?>
		<div id="info">
		<?php include('js/combatActuel.php'); ?>
		</div>
	</div>

</div>

<div id="deux">
	<div id="textChoix">
		<p>Que doit faire SALAMECHE ?</p>
	</div>
	<div id="choix">
		<div id="choixUn">
		<p>ATTAQUE</p>
		</div>
	</div>
</div>

</div>
<?php include('js/script.php'); ?>
</body>
</html>