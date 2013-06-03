<?php
require('../file_path.php'); 
 	include(DIR_HEADER);
 	$allStars=new Player();
?>
	<div class="span9">
		<div class="hero-unit">
			<h2>Season All Star Points</h2>
			<?php
				//$allStarTotal=$allStars->allStarTotal(1);
				//print_r($allStarTotal);
				for($i=1;$i<=8;$i++){
					$allStarTotal=$allStars->allStarTotal($i);
					foreach($allStarTotal as $ast){
						if($ast['TotalPoints']==NULL){
							$totalPoints=0;
							}
						else{
							$totalPoints=$ast['TotalPoints'];
							}
						echo $ast['firstName']." ".$ast['lastName'].": ".$totalPoints."<br />";
					}
				}
			?>
			
		</div>
	</div>