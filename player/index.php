<?php
require('../file_path.php'); 
 	include(DIR_HEADER);
 	?>
 	  <div class="span9">
          <div class="hero-unit">
          <h2>Players</h2>
          	<div class="offset4">
          	
<?php
 	$players=new Stats();
 	$playerList=$players->getAllPlayers();
 	foreach($playerList as $player){
 		echo "<a href='playerStats.php?id=".$player['playerID']."'>".$player['firstName']." ".$player['lastName']."</a><br />"; 		}
 		
?>
</div>
<hr />
<h2>Leader Boards</h2>
</div>
</div>