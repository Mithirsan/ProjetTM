<?php
	include "admin.php";
	
	$price = $_POST['price'];
	$name = $_POST['name'];
	$username = $_SESSION['login'];
	$num = $_POST['num'];
	$address = $_POST['address'];
	$cp = $_POST['cp'];
	$location = $_POST['location'];
	$country = $_POST['country'];
	$rooms = $_rooms['rooms'];
	

	
	$req = $bdd->prepare("INSERT INTO rents(username, num, address, cp, location, country, rooms, price) VALUES (:username, :name, :num,  :address, :cp, :location, :country, :room, :price");
	
	$req -> execute(arrays(
		'username' => $username,
		'name' => $name,
		'num' => $num,
		'address' => $address,
		'cp' => $cp,
		'location' => $location,
		'country' => $country,
		'room' => $rooms,
		'price' => $price
	));
	
	$req -> closeCursor();
	
	$req = $bdd-> prepare("SELECT id FROM rents ORDER BY id DESC LIMIT 1");
	
	$req -> execute();
	
	$id = $req->fetch();
	if(!is_dir("../data/".$_SESSION['login']."/".$id))
	{
		mkdir("../data/".$_SESSION['login']."/".$id);
	}
	
	$req -> closeCursor();
	header('Location: index.php');
?>