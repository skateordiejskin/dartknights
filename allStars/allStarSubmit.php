<?php
require('../file_path.php'); 
include DIR_CLASS . 'stats.class.php';

switch($_POST['roundHit']){
						case R5:
							$roundHit=100;
							break;
						case R6:
							$roundHit=120;
							break;
						case R7:
							$roundHit=140;
							break;
						case R8:
							$roundHit=160;
							break;
						case R9:
							$roundHit=180;
							break;
						case "3C":
							$roundHit=100;
							break;
						case "4C":
							$roundHit=125;
							break;
						case "5C":
							$roundHit=150;
							break;
						case "6C":
							$roundHit=175;
							break;
						default:
							$roundHit=$_POST['roundHit'];
							break;
						}

$allStars = new Stats();
$allStars->allStarSubmit($_POST['week'], $_POST['playerID'], $_POST['roundHit'], $roundHit);

?>
<meta http-equiv='refresh' content='0; url=/allStars/input.php' />