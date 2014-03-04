<?php
header("Content-type: text/javascript");

$num1 = rand(1,50);
$num2 = rand(1,50);
$product = $num1*$num2;
?>

alert("<?php echo $num1 . ' x ' . $num2 . ' = ' . $product; ?>");