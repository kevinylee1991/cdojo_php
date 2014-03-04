<?php
	$states = array('CA','WA','VA','UT','AZ');
	$states[] = 'NJ';
	$states[] = 'NY';
	$states[] = 'DE';
	
	echo "<select>";
	for($i = 0; $i < count($states); $i++){
		echo "<option value='{$i}'>{$states[$i]}</option>";
	}
	echo "</select>";
?>