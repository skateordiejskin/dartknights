<?php
require('../file_path.php'); 
 	include(DIR_HEADER);
$player = new Stats();
$players=$player->getAllPlayers();
$player2=$player->getAllPlayers();

$gameID=$_GET['gameID'];
switch($gameID){
case "s501":
	$gameName="Singles 501";
	break;
case "sCricket":
	$gameName="Singles Cricket";
	break;
case "d501":
	$gameName="Doubles 501";
	break;
case "dCricket":
	$gameName="Doubles Cricket";
	break;
}

?>
<form action='gameSubmit.php' method='post'>
<?php
switch($gameID){

	/***********************************Singles 501*******************************************/
case "1":
	echo "<h1>Singles 501</h1>
								<h4>Player:</h4>
								<select id='playerID' name='playerID'>
								";
	
	foreach($players as $allPlayers){
		echo "<option value='".$allPlayers['playerID']."'>".$allPlayers['firstName']." ".$allPlayers['lastName']."</option>
							 ";
	}

	?>
		</select>
		<select id='outcome' name='outcome'>
			<option value='W'>Win</option>
			<option value='L'>Loss</option>
		</select>
		<input type='hidden' id='gameID' value='1' name='gameID' />
		<input type='text' name='turnsToOut' placeholder='Turns to Out' />
		<input type='text' name='outHit' placeholder='Out Hit' />
		<br /><input type='submit' value='Send It!' /><p>
<?php
	break;



/***********************************Singles Cricket*******************************************/
case "2":
	echo "<h1>Singles Cricket</h1>
			<h4>Player:</h4>
							<select id='playerID' name='playerID'>
					";
	foreach($players as $allPlayers){
		echo "<option value='".$allPlayers['playerID']."'>".$allPlayers['firstName']." ".$allPlayers['lastName']."</option>
			 ";
	}
	?>
		</select>
		<select id='outcome' name='outcome'>
			<option value='W'>Win</option>
			<option value='L'>Loss</option>
		</select>
		<input type='hidden' id='gameID' value='2' name='gameID' />
		<br /><input type='submit' value='Send It!' />
<?php
	break;




	/***********************************Doubles Cricket*******************************************/
case "3":
		echo "<h1>Doubles Cricket</h1>
						<h4>Player 1:</h4>
							<select id='playerID' name='playerID'>
					";
		foreach($players as $allPlayers){
			echo "<option value='".$allPlayers['playerID']."'>".$allPlayers['firstName']." ".$allPlayers['lastName']."</option>
			 ";
		}
	
	echo "</select>
						<h4>Player 2:</h4>
							<select id='player2ID' name='player2ID'>
					";
					
	foreach($player2 as $allPlayers){
		echo "<option value='".$allPlayers['playerID']."'>".$allPlayers['firstName']." ".$allPlayers['lastName']."</option>
			 ";
	}
	
	?>
	</select>
	<select id='outcome' name='outcome'>
		<option value='W'>Win</option>
		<option value='L'>Loss</option>
	</select>
	<input type='hidden' id='gameID' value='3' name='gameID' />
	<br /><input type='submit' value='Send It!' />

<?php
	break;


	//Doubles 501
case "4":
	
	echo "<h1>Doubles 501</h1>
						<h4>Player 1:</h4>
							<select id='playerID' name='playerID'>
					";
	foreach($players as $allPlayers){
			echo "<option value='".$allPlayers['playerID']."'>".$allPlayers['firstName']." ".$allPlayers['lastName']."</option>
			 ";
		}
	echo "</select>
						<h4>Player 2:</h4>
							<select id='player2ID' name='player2ID'>
					";
	foreach($player2 as $allPlayers){
		echo "<option value='".$allPlayers['playerID']."'>".$allPlayers['firstName']." ".$allPlayers['lastName']."</option>
			 ";
	}

	?>
		</select>
		<select id='outcome' name='outcome'>
			<option value='W'>Win</option>
			<option value='L'>Loss</option>
		</select>
		<input type='hidden' id='gameID' value='4' name='gameID' /><br />
		<input type='text' name='turnsToIn' placeholder='Turns to In' />
		<input type='text' name='turnsToOut' placeholder='Turns to Out' />
		<input type='text' name='outHit' placeholder='Out Hit' />
		<br /><input type='submit' value='Send It!' />
<?php
	break;

}
?>

					</form>

				</div>
			</div>
		</div>


<?php require('../public/includes/footer.php'); ?>
