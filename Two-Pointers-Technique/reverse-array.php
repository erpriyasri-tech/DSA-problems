<?php
// everse an array in place using two pointers.
//Example: [1,2,3,4,5] → [5,4,3,2,1]

$array = [1,2,3,4,5];
$count = count($array);

$left = 0;
$right = $count-1;
while($left < $right){
    $temp = $array[$left];
    $array[$left] = $array[$right];
    $array[$right] = $temp;
    $left++;
    $right--;

}
echo implode(",", $array);
?>