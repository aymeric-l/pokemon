<?php

	if(isset($_COOKIE['pseudo'])){
		//include('indexx.php');
		include('js/recherchePvp.php');
	}

	else if(isset($_POST['pseudo'])){

		if($_POST['pseudo'] == 'aymeric'){
			setcookie("pseudo", $_POST['pseudo']);
			setcookie("adversaire", 'robert');
			include('indexx.php');

		}else if ($_POST['pseudo'] == 'robert'){
			setcookie("pseudo", $_POST['pseudo']);
			setcookie("adversaire", 'aymeric');
			include('indexx.php');
		}

		else{
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