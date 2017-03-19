<?php 
	$pseudoJoueurCo = $_COOKIE['pseudo'];
	$bdd = new PDO('mysql:host=localhost;dbname=combat;charset=utf8', 'root', '' );
	$recherchePvp = $bdd->query('SELECT * FROM joueurs WHERE recherchePvp="yes" AND pseudo<>"'.$pseudoJoueurCo.'" ')->fetchALL();
	

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css"></link>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script>function recherchePvp(){
			$.ajax({
		      type: "GET",
		      url: "js/recherchePvp.php"
		   }).done(function (html) {
		      $("body").html(html); 
		   });
		}
	</script>

</head>
<body>
<div style="display: flex; flex-direction: column; justify-content: center;">
<?php 
if(isset($recherchePvp[0])){
		if($recherchePvp[0][1] != $pseudoJoueurCo){
			echo 'Trouvé !';
			$miseEnRecherche = $bdd->prepare('UPDATE joueurs SET recherchePvp="yes" WHERE pseudo="'.$pseudoJoueurCo.'" ')->execute();
			include('indexx.php');

		}else if($recherchePvp[0][1] == $pseudoJoueurCo){
		echo '<h1 style="margin-left: 20%;">Veuillez patienter pendant la recherche d\'un adversaire</h1>';
		echo '<img src="pokemon/chargement.gif" style="margin-left: 40%">';
		echo '<script>setTimeout(function(){ recherchePvp(); }, 3000);</script>';
		}
	}

	else{
		$miseEnRecherche = $bdd->prepare('UPDATE joueurs SET recherchePvp="yes" WHERE pseudo="'.$pseudoJoueurCo.'" ')->execute();
		echo '<h1 style="margin-left: 20%;">Veuillez patienter pendant la recherche d\'un adversaire</h1>';
		echo '<img src="pokemon/chargement.gif" style="margin-left: 40%">';
		echo '<script> setTimeout(function(){ recherchePvp(); }, 3000); </script>';
	}
?>
</div>
</body>
</html>