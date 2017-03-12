<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
	$combat = $bdd->query('SELECT * FROM pokemon');
	$listePokemon = [];
	foreach ($combat as $value) {
	array_push($listePokemon, $value);
}
?>

			<div id="nom"><?php echo $listePokemon[0]['nom']; ?></div>
			<div id="niveau"><?php echo 'Lvl : '.$listePokemon[0]['niveau']; ?></div>
			<div id="vie"><?php echo 'Pv : '.$listePokemon[0]['vie']; ?></div>
		


<!-- <script type="text/javascript">
		function combat() {
		   $.ajax({
		      type: "GET",
		      url: "js/combatActuel.php"
		   }).done(function (html) {
		      $('#un').html(html); // Retourne dans #maDiv le contenu de ta page
		      setTimeout(combat, 5000);
		   });
		}  
		combat();    
</script>  -->