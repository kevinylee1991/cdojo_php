<?php
	$test_array = array();
	for ($i = 0; $i < 100; $i++){
		$test_array[] = rand(0, 10000);
	}

	function sort_array($array){
		for ($i = 0; $i < count($array); $i++){
			for ($j = 0; $j < count($array); $j++){
				if ($array[$i] < $array[$j]){
					$placeholder = $array[$i];
					$array[$i] = $array[$j];
					$array[$j] = $placeholder;
				}
			}
		}
		return $array;
	}

	$time_start = microtime(true);
	$new_array = sort_array($test_array);
	$time_end = microtime(true);
	$time = $time_end - $time_start;
	echo "seconds: " . $time;
	var_dump($new_array);
?>