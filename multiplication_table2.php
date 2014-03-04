<style type="text/css">
	th, td{
		width: 20px;
		height: 20px;
	}

	.bold{
		font-weight: bold;
	}

</style>

<table>
	<thead>
		<tr>
<?php 
for($i = 0; $i < 10; $i++){
	if ($i == 0) echo "<th></th>";
	else{ 
		echo "<th>$i</th>";
	}
}
?>
		</tr>
	</thead>

	<tbody>
<?php
for($row = 1; $row < 10; $row++){
	echo "<tr>";
	for($col = 0; $col < 10; $col++){
		if ($col == 0) echo "<td class='bold'>$row</td>";
		else {
			echo "<td>" . $col*$row . "</td>";
		}
	}
	echo "</tr>";
}
?>
	</tbody>
</table>