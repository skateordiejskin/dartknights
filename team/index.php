<?php
require('../file_path.php'); 
include(DIR_HEADER);
?>
					<div class="span9">
						<div class="hero-unit">
						<a href="teamStats.php?id=all">| Overall Stats </a>
							
<?php
//require_once('app/class/stats.class.php');

$week=new Stats();
$weekNum=$week->weeks();
foreach($weekNum as $weeks){
	echo "<a href='teamStats.php?id=".$weeks['weekNum']."'>| Week ".$weeks['weekNum']." </a>";
	}


?>
|
</div>
</div>
</div>
</div>
