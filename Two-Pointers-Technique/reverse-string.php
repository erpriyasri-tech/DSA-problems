<?php
// everse string in place using two pointers.
// Example : Priya - ayirP 
$string = 'Priya';
$length = strlen($string);

$left = 0;
$right = $length-1;

while($left<$right){
    $temp = $string[$left];
    $string[$left] = $string[$right];
    $string[$right] = $temp;
    $left++;
    $right--;
}

echo "Reverse String: "  . $string;
?>