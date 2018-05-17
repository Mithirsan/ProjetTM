<?php
	include "admin.php";
	
	$req = $bdd -> prepare ("SELECT * FROM users");
	
	try
	{
		$req -> execute();
	}
	catch(Exception $e){}
	
?>

<html>
	<body>
		<table id="tableUsers"><tr id = "title"><th>username</th><th>mail</th><th>firstName</th><th>lastName</th><th>birthDate</th></tr>
			<?php
				while($user = $req->fetch())
				{
					echo '<tr><td>'.$user['username'].'</td><td>'.$user['mail'].'</td><td>'.$user['firstName'].'</td><td>'.$user['lastName'].'</td><td>'.$user['birthDate'].'</td><td></tr>';
				}
				
				$req -> closeCursor();
			?>
		</table>
		
	</body>
</html>