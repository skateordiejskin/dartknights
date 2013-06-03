<?php
require('../file_path.php'); 
include(DIR_HEADER);
?>
						<div class="span8">
					<div class="hero-unit">
										
				<?php

$player=new Stats();

$weekNum=$_GET['id'];
if($weekNum!="all"){

$weekSingles501=$player->singles501($weekNum);
print "<div class='span4'>
		<h3>Singles 501</h3>";
foreach($weekSingles501 as $singles501){
	echo $singles501['firstName']." ".$singles501['lastName']." ".$singles501['outcome']." ".$singles501['outHit']."<hr />
	";
	}
	echo "</div>";

$weekSinglesCricket=$player->singlesCricket($weekNum);
print "<div class='span4'>
		<h3>Singles Cricket</h3>";
foreach($weekSinglesCricket as $singlesCricket){
	echo $singlesCricket['firstName']." ".$singlesCricket['lastName']." ".$singlesCricket['outcome']."<hr />
	";
	}
	
echo "</div>";

$weekDoublesCricket=$player->doublesCricket($weekNum);
print "<div class='row'>
		<div class='span12'>
		<div class='span4'>
		<h3>Doubles Cricket</h3>";

foreach($weekDoublesCricket as $doublesCricket){
	echo $doublesCricket['player1Last']."/".$doublesCricket['player2Last']." ".$doublesCricket['outcome']."<hr />
	";
	}
	echo "</div>";

$weekDoubles501=$player->doubles501($weekNum);
print "<div class='span4'><h3>Doubles 501</h3>";

foreach($weekDoubles501 as $doubles501){
	echo $doubles501['player1Last']."/".$doubles501['player2Last']." ".$doubles501['outcome']." ".$doubles501['turnsToIn']." ".$doubles501['turnsToOut']." ".$doubles501['outHit']."<hr />
	";
	}
	echo "</div>";
	}
	
elseif($weekNum="all"){
	$currentWeek=7;
	$gamesPerNight=12;
	$totalGamesPlayed=$currentWeek*$gamesPerNight;
	$percent=$player->percentages();
	$percent['total'];
	$winDec= ($percent['total'])/($currentWeek*$gamesPerNight);
	$winPercent=$winDec*100;
	$winPercent=substr($winPercent,0,4);
	echo "<h3>Overall Team Percentage</h3>".$winPercent."%";
	
	
	}
	
?>