<?php
	$heads = 0;
	$tails = 0;
	for($i=1; $i<5001; $i++){
		$num =  rand(0,1);
		echo "Attempt #{$i}: Throwing a coin... ";
		if ($num === 0){
			echo "It's a head! ... ";
			$heads += 1;
		}
		else{
			echo "It's a tail! ... ";
			$tails += 1;
		}
		echo "Got {$heads} head(s) so far and {$tails} tail(s) so far";
		echo "<br>";
	}

	echo "<h2>Ending the program - thank you!</h2>"
?>