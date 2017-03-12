<?php 
	
	$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
	$attaque = $bdd->query('SELECT * FROM attaques');
	$listeAttaque = [];
	foreach ($attaque as $valueATK) {
	array_push($listeAttaque, $valueATK);
	}
?>

<script type="text/javascript">


$('#pousser').html('yo');

$('#choixUn').click(function() {
	$('#choix').html('<div id="attaqueUne"></div>');
	$('#choix').append('<div id="attaqueDeux"></div>');
	$('#attaqueUne').html('<h3><?PHP echo $listeAttaque[0][1]; ?></h3>');
	$('#attaqueDeux').html('<h3><?PHP echo $listeAttaque[2][1]; ?></h3>');
});

$('#attaqueUne').click(function() {
	
});


</script>