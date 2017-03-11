<?php 
	include('jeu.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forkemon</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery-3.1.1.min.js"></script>
</head>
<body>
<div id="contenaire"><img id="img" src="map/poivressel.png"/><div id="personnage"></div><div id="joueurDeux"></div></div>
<img src="map/maison.png" id="maison"/>
<img src="map/maisonBleu.png" id="maisonBleu"/>
<script type="text/javascript">
	var bddX='<?PHP echo $robertDroit;?>';
	var bddY='<?PHP echo $robertHaut;?>';
</script>
<script type="text/javascript">
		function actu() {
		   $.ajax({
		      type: "GET",
		      url: "jeu.php"
		   }).done(function (html) {
		      $('#ilfautunediv').html(html); // Retourne dans #maDiv le contenu de ta page
		      setTimeout(actu, 1000);
		   });
		}      
		actu();
</script>
<script src="js/script.js"></script>
<div id="ilfautunediv"></div>
</body>
</html>