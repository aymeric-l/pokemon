<?php 
$bdd = new PDO('mysql:host=localhost;dbname=combat', 'root', '' );
$combat = $bdd->query('SELECT * FROM pokemon');

$listePokemon = [];

foreach ($combat as $value) {
	array_push($listePokemon, $value);
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
	<div id="pousser"></div>
		<div id="infoEnnemi">
			<div id="nom"><?php echo $listePokemon[1][1]; ?></div>
			<div id="niveau"><?php echo 'Lvl : '.$listePokemon[1][2]; ?></div>
			<div id="vie"><?php echo 'Pv : '.$listePokemon[1][3]; ?></div>
		</div>
		<div id="ennemi"><img src="pokemon/carapuce.png"></div>
	</div>
	<div id="unDeux">
		<div id="pokemon"><img src="pokemon/salameche.png"></div>
		<div id="info">
			<div id="nom"><?php echo $listePokemon[0][1]; ?></div>
			<div id="niveau"><?php echo 'Lvl : '.$listePokemon[0][2]; ?></div>
			<div id="vie"><?php echo 'Pv : '.$listePokemon[0][3]; ?></div>
		</div>
	</div>
</div>



<div id="deux">
	<div id="textChoix">
		<p>Que doit faire SALAMECHE ?</p>
	</div>
	<div id="choix">
		<div id="choixUn"><p>ATTAQUE</p></div>
	</div>
</div>

</div>
<?php include('js/script.php'); ?>
</body>
</html>