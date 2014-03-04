<?php
header("Content-type: text/css");

$color1 = 'blue';

$color2 = 'red';
?>

h1{
	color: <?= $color1 ?>;
}
p{
	color: <?php echo $color2; ?>;
}
