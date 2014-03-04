<?php
	$sample = array(135, 2.4, 2.67, 1.23, 332, 2, 1.02);
	function get_max_and_min($array){
			$min = $array[0];
			$max = $array[0];
		for ($i = 1; $i < count($array); $i++){
			if ($array[$i] > $max){
					$max = $array[$i];
			}
			else if ($array[$i] < $min){
					$min = $array[$i];
			}
			
		}

		$result = array(
			'max' => $max,
			'min' => $min
		);

		return $result;
	}

	$output = get_max_and_min($sample);
	var_dump($output);
?>