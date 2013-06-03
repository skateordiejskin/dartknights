<?php
require('../file_path.php'); 
 	include(DIR_HEADER);
 	?>
 	  <div class="span9">
          <div class="hero-unit">
<?php
 	$playerStats=new Stats();
 	
 	$playerName=$playerStats->getPlayer($_GET['id']);
 	echo "<h3>".$playerName['firstName']." ".$playerName['lastName']."</h3>";
 	
 	$totalGames=$playerStats->totalGames($_GET['id']);
 	echo "Total Games Played: ".$totalGames['count(outcome)']."<br />";
 	
 	$totalWins=$playerStats->totalWins($_GET['id']);
 	echo "Total Wins: ".$totalWins['count(outcome)']."<br />";
 	
 	$totalLoss=$playerStats->totalLoss($_GET['id']);
 	echo "Total Loss: ".$totalLoss['count(outcome)']."<br />";
	
	
	$winPercent=($percentage=$totalWins['count(outcome)']/$totalGames['count(outcome)'])*100;
	$percentage =substr($winPercent,0,4);
	echo "Winning Percentage: ".$percentage."%";

 	?>
 	</div>
 	</div>