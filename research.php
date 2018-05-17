<?php
	include "admin.php";
	
	if(isset($_GET['country'])
	{
		if(isset($_GET['location'])
		{
			$req = $bdd -> prepare("SELECT * FROM rents WHERE country LIKE :country AND location LIKE :location");
			$req ->execute(arrays(
				'country' => $_GET['country'],
				'location' => $_['location']
			));
		}
		else
		{
			$req = $bdd -> prepare("SELECT * FROM rents WHERE country LIKE :country");
			$req ->execute(arrays(
				'country' => $_GET['country']
			));
		}
	}
	else if (isset($_GET['location'])
	{
		$req = $bdd -> prepare("SELECT * FROM rents WHERE location LIKE :location");
		$req ->execute(arrays(
			'location' => $_GET['location']
		));
	}
	

?>

<html>
	<body>
		<?php
			while($rent = $req->fetch())
			{
				echo $rent['id'].'</br>';
			}
			$req -> closeCursor();
		?>
	</body>
</html>


<div>
    <img>
    


</div>

<article itemscope id="" data-adv>
  <div class="listed-adv-item" data-component="listed-item" data-listed-item="" data-adv-link="https://www.2ememain.be/autos/alfa-romeo/145/alfa-romeo-145-1-4i-16v-406699226.html" data-adv-id="adv-406699226">
      <a class="listed-item-imagery" href="https://www.2ememain.be/autos/alfa-romeo/145/alfa-romeo-145-1-4i-16v-406699226.html">
          <div class="listed-item-photo">
               <img class="item-center-image" src="https://img.2ememain.be/f/small/424266320_1.jpg" itemprop="image">
          </div>
      </a>
    </div>
</article>