<?php 
	$users = array(
		array('first_name' => 'Michael', 'last_name' => 'Choi'),
		array('first_name' => 'John', 'last_name' => 'Supsupin'),
		array('first_name' => 'Mark', 'last_name' => 'Guillen'),
		array('first_name' => 'KB', 'last_name' => 'Tonel'),
		array('first_name' => 'Michael', 'last_name' => 'Choi'),
		array('first_name' => 'John', 'last_name' => 'Supsupin'),
		array('first_name' => 'Mark', 'last_name' => 'Guillen'),
		array('first_name' => 'KB', 'last_name' => 'Tonel'),
		array('first_name' => 'Michael', 'last_name' => 'Choi'),
		array('first_name' => 'John', 'last_name' => 'Supsupin'),
		array('first_name' => 'Mark', 'last_name' => 'Guillen'),
		array('first_name' => 'KB', 'last_name' => 'Tonel'),
		array('first_name' => 'Michael', 'last_name' => 'Choi'),
		array('first_name' => 'John', 'last_name' => 'Supsupin'),
		array('first_name' => 'Mark', 'last_name' => 'Guillen'),
		array('first_name' => 'KB', 'last_name' => 'Tonel')
		);
?>

<table>
	<thead>
		<tr>
			<th>User</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Full Name</th>
			<th>Full Name in upper case</th>
			<th>Length of name</th>
		</tr>
	</thead>

	<tbody>
<?php 
	for($row = 0; $row < count($users); $row++){
		if (($row+1)%5 === 0) echo "<tr style='background-color:yellow;'>";
		else echo "<tr>";

		for($col = 0; $col < 6; $col++){
			echo "<td>";
			switch ($col)
			{
				case 0:
					echo $row+1;
					break;
				case 1:
					echo $users[$row]['first_name'];
					break;
				case 2:
					echo $users[$row]['last_name'];
					break;
				case 3:
					echo $users[$row]['first_name'] . " " . $users[$row]['last_name'];
					break;
				case 4:
					echo strtoupper($users[$row]['first_name'] . " " . $users[$row]['last_name']);
					break;
				case 5:
					echo strlen($users[$row]['first_name'] . " " . $users[$row]['last_name']);
					break;
			}
			echo "</td>";
		}
		echo "</tr>";
	}
?>
	</tbody>
</table>

