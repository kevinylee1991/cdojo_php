<?php
	$test_array = array();
	for ($i = 0; $i < 100; $i++){
		$test_array[] = rand(0, 10000);
	}

	function insertion_sort($array){
		for ($i = 0; $i < count($array); $i++){
			$position = $i;
			while ( $position > 0 && $array[$position] < $array[$position-1]){
				$placeholder = $array[$position];
				$array[$position] = $array[$position-1];
				$array[$position-1] = $placeholder;
				$position--;
			}			
		}
		return $array;
	}

	$time_start = microtime(true);
	$new_array = insertion_sort($test_array);
	$time_end = microtime(true);
	$time = $time_end - $time_start;
	echo "seconds: " . $time;
	var_dump($new_array);
?>