<?php
	$test_array = array();
	for ($i = 0; $i < 100; $i++){
		$test_array[] = rand(0, 10000);
	}

	function bubble_sort($array){
		$sorted = false;
		while($sorted == false){
			$sorted = true;
			for($i = 0; $i < count($array)-1; $i++){
				if ($array[$i] > $array[$i+1]){
					$placeholder = $array[$i];
					$array[$i] = $array[$i+1];
					$array[$i+1] = $placeholder;
					$sorted = false;
				}
			}
		}
		return $array;
	}

	$time_start = microtime(true);
	$new_array = bubble_sort($test_array);
	$time_end = microtime(true);
	$time = $time_end - $time_start;
	echo "seconds: " . $time;
	var_dump($new_array);
?>