<?php

require_once('app/class/stats.class.php');

$player=new Stats();
?>
<form action="" method="post">
<select>

<?php
$players=$player->getAllPlayers();

foreach($players as $allPlayers){
	echo "<option value='".$allPlayers['playerID']."'>".$allPlayers['firstName']." ".$allPlayers['lastName']."</option>
	";	
}



?>
</select>
</form>

<?php
/*$weekSinglesCricket=$player->weekResults(1);
foreach($weekSinglesCricket as $singlesCricket){
	echo $singlesCricket['firstName']." ".$singlesCricket['lastName']." ".$singlesCricket['outcome']."<br />";
	}*/
/*$doublesCricket=$player->doublesCricket(1);
foreach($doublesCricket as $doublesCricket){
	echo $doublesCricket['player1Last']."/".$doublesCricket['player2Last']." ".$doublesCricket['outcome']."<br />";
	}
	//print_r($doublesCricket);
	
	$weekSinglesCricket=$player->weekResults(1);
foreach($weekSinglesCricket as $singlesCricket){
	echo $singlesCricket['firstName']." ".$singlesCricket['lastName']." ".$singlesCricket['outcome']."<br />";
	}
	*/
	
	