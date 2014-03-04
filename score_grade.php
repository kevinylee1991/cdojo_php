<?php
	$score = rand(50, 100);

	if ($score < 70){
		echo "<h1>Your Score: {$score}/100</h1>";
		echo "<h2>Your grade is D.</h2>";
	}
	else if ($score < 81){
		echo "<h1>Your Score: {$score}/100</h1>";
		echo "<h2>Your grade is C.</h2>";
	}
	else if ($score < 91){
		echo "<h1>Your Score: {$score}/100</h1>";
		echo "<h2>Your grade is B.</h2>";
	}
	else{
		echo "<h1>Your Score: {$score}/100</h1>";
		echo "<h2>Your grade is A.</h2>";
	}
?>