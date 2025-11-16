<?php
// Swap two numbers without using a third variable.
// After Swap A value 66 and B value 78

$a = 78;
$b = 66;

//Swap without using a third variable

$a = $a+$b;
$b = $a-$b;
$a = $a-$b;

//Swap Second Method
$a = $a ^ $b;
$b = $a ^ $b;
$a = $a ^ $b;

echo "After Swap A value " .$a . " and B value " . $b;

?>