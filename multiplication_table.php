<style type = "text/css">
	thead{
		font-weight: bold;
	}
</style>

<table>
<?php for($i=0; $i<=9; $i++)
    { ?>
<?php 	if ($i == 0){ ?>
	<thead>
		<tr>
<?php 		for($j = 0; $j <= 9; $j++)
			{ ?>
		    <th>
<?php 			if ($j == 0){}
				else
					echo $j; ?>
			</th>
<?php 		} ?>
		</tr>
	</thead>
	<tbody>
<?php 	} else { ?>
			<tr>
<?php 			for($k = 0; $k <= 9; $k++)
					{ ?>
						<td>
<?php 	 				if ($k == 0)
								echo $i;
						else
							echo $i*$k; ?>
					</td>
<?php 			} ?>
			</tr>
<?php 	} ?>
	</tbody>
<?php } ?>
</table>