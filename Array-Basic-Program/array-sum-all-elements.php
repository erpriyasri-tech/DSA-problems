<?php
//2. Find the sum of all elements.
$array = [1,2,3,4,5,6];
$count = count($array);
$sum =0;

for($i=0; $i<$count; $i++){
    $sum += $array[$i];
}


echo $sum;
?>