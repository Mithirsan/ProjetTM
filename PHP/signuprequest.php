<?php

	include "../admin.php";
	
	//Récupération des données du formulaire
	$username = $_POST['username'];
//	$password = hash('sha256', $_POST('password'));		//cryptage du mot de passe
    $password = hash('sha256', $_POST['password']); //plus conforme actuellement.
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$mail = $_POST['email'];
	$birthDate = ($_POST['birthDate']);
	


	if(isset($_POST['phone'])){
		$phone = $_POST['phone'];
		
		//requête si phone

		$query = "INSERT INTO users(username, password, mail, birthDate, firstName, lastName, phone) VALUES ('$username', '$password', '$mail', '$birthDate', '$firstName', '$lastName', '$phone')";


	}
	
	//requête sans phone
	else
	{

		$query = "INSERT INTO users(username, password, mail, birthDate, firstName, lastName) VALUES ('$username', '$password', '$mail', '$birthDate', '$firstName', '$lastName')";	


	}
	
	//préparation de la requête
	$request = $bdd -> prepare($query);
	
	
	
	//Tentative d'inscription
	try{
		$request -> execute();
		$directory = $username;
		if(!is_dir("../data/".$directory))
		{
			mkdir("../data/".$directory);
		}
		include "../home.php";
	}
	
	//Inscription ratée
	catch(Excetpion $e){
		echo $e -> getMessage();
	}
	
	//Fermeture du curseur
	$request -> closeCursor();
?>

