<?php
	include "admin.php";
	
	$req = $bdd -> prepare("SELECT * FROM rents WHERE isLocated = true");
	
	try
	{
		$req->execute();
	}
	catch(Exception $e)
	{}
?>
<html>
	<body>
		<?php
			while($rent = $req->fetch())
			{
				echo $rent['id'].', '.$rent['num'].', '.$rent['address'].', '.$rent['cp'], $rent['location'].', '.$rent['country'].', '.$rent['price'].'</br>';
			}
			$req -> closeCursor();
		?>
	</body>
</html>