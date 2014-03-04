<style type="text/css">
	.red{
		background-color: red;
		width: 50px;
		height: 50px;
	}

	.black{
		background-color: black;
		width: 50px;
		height: 50px;
	}
</style>

<table>
	<tbody>
<?php
	for ($row = 0; $row < 8; $row++){
		echo "<tr>";
		if ($row%2 == 0){ //row 1, 3, 5, 7
			for ($col = 0; $col < 8; $col++){
				if ($col%2 == 0) echo "<td class = red></td>";
				else echo "<td class = black></td>";
			}
		}
		else{ //row 2, 4, 6, 8
			for ($col = 0; $col < 8; $col++){
				if ($col%2 == 0) echo "<td class = black></td>";
				else echo "<td class = red></td>";
			}
		}
		echo "</tr>";
	}
?>
	</tbody>
</table>

<table>
	<tbody>
<?php
	for ($row = 1; $row < 17; $row++){
		echo "<tr>";
			for ($col= 1; $col < 17; $col++){
				if (($col+$row)%2 == 0) echo "<td class = black></td>";
				else echo "<td class = red></td>";
			}
		echo "</tr>";
		}
?>
	</tbody>
</table>