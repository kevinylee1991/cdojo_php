<?php
	$x = array(4,'Tom',1,"Michael",5,7,"Jimmy Smith");
	function draw_stars($array){
		for($i = 0; $i < count($array); $i++){
			if(is_numeric($array[$i])){
				for($j = 0; $j < $array[$i]; $j++){
					echo "*";
				}				
			}
			else{
				for($j = 0; $j < strlen($array[$i]); $j++){
					echo strtolower($array[$i][0]);
				}
			}
			echo "<br>";
		}
	}

	draw_stars($x);
?>