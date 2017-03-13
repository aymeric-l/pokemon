<?php
	if(isset($_SESSION['pseudo'])){
		include('indexx.php');
	}

	else if(isset($_POST['pseudo'])){
		if($_POST['pseudo'] == 'aymeric' OR $_POST['pseudo'] == 'robert'){
		$_SESSION['pseudo'] = $_POST['pseudo'];
		include('indexx.php');
		}else{
		echo '<form action="" method="post">';
		echo '<label>Indiquez votre pseudo</label></br><input type="text" name="pseudo"></br>';
		echo '<input type="submit" name="Envoi">';
	}
	}

	else{
		echo '<form action="" method="post">';
		echo '<label>Indiquez votre pseudo</label></br><input type="text" name="pseudo"></br>';
		echo '<input type="submit" name="Envoi">';
	}
?>