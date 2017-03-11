<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=pokemon', 'root', '' );
	$joueurs = $bdd->query('SELECT axeX,axeY FROM joueur');
	foreach ($joueurs as $value) {
		$robertDroit = $value[0];
		$robertHaut = $value[1];
	}
?>
<script type="text/javascript">
	var bddX='<?PHP echo $robertDroit;?>';
	var bddY='<?PHP echo $robertHaut;?>';

</script>
