<?php
//Calculate the average of all elements.
//Time Complexity O(n) Space Complexity O(1) Reason Single loop through all array elements
$array = [-2, 3, -2, 5, 3, 2, -4, 5];
$count = count($array);
$totalSum =0;

for($i=0; $i<$count; $i++){
$totalSum += $array[$i];
}
$average = $totalSum/$count;

echo "Average: " . $average;
?>