<?php
require('../file_path.php'); 
 	include(DIR_HEADER);
 	$player = new Stats();
 	$players=$player->getAllPlayers();
 	$weekNum=$player->weeks();
?>
<div class="span9">
	<div class="hero-unit">
		<h2>All Star Points</h2>
		<form action="allStarSubmit.php" method="post">
			<h4>Player:</h4>
			<select id='playerID' name='playerID'>
	<?php
	foreach($players as $allPlayers){
		echo "<option value='".$allPlayers['playerID']."'>".$allPlayers['firstName']." ".$allPlayers['lastName']."</option>
							 ";
	}
	?>
	</select>
	<br />
	<select id='week' name='week'>
	<?php
	foreach($weekNum as $weeks){
	echo "<option value='".$weeks['weekNum']."'>".$weeks['weekNum']."</option>";
	}

?>

			</select>
			</br />
			<input type="text" id="roundHit" name="roundHit" placeholder="Round Hit" /><br />
			<input type="submit" value="Send It!" />
		</form>
	</div>
</div>