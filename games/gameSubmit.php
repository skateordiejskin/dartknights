<?php
require('../file_path.php'); 
 	include(DIR_CLASS . 'games.class.php');

	echo $playerID=$_POST['playerID'];
	$playedWith=$_POST['player2ID'];
	echo $outcome=$_POST['outcome'];
	echo $gameID=$_POST['gameID'];
	echo $turnsToOut=$_POST['turnsToOut'];
	$turnsToIn=$_POST['turnsToIn'];
	echo $outHit=$_POST['outHit'];
	echo $weekNum=8;
	if($outHit==NULL){
		$outHit="N/A";
		}

$games=new Games();
	
switch($gameID){
	case 1:
		$s501=$games->s501($playerID, $weekNum, $turnsToOut, $outHit, $outcome);
		break;
	case 2:
		$sCricket=$games->sCricket($playerID, $weekNum, $outcome);
		break;
	case 3:
		$dCricket=$games->dCricket($playerID, $playedWith, $weekNum, $outcome);
		break;
	case 4:
		$d501=$games->d501($playerID, $playedWith, $weekNum, $turnsToIn, $turnsToOut, $outHit, $outcome);
		break;
}
	
echo "<meta http-equiv='refresh' content='0; url=/games/?gameID=".$gameID."' />";