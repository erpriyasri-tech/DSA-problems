<?php
//7. Reverse an array in-place

$array = [1,2,3,4,5,6];
$count = count($array);
$left =0;
$right = $count - 1;

while($left <$right){
    $temp = $array[$left];
    $array[$left] = $array[$right];
    $array[$right] = $temp;
    $left++;
    $right--;
}

echo implode(',' , $array);
?>