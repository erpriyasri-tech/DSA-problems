<?php
// Find the maximum sum of two numbers in a sorted array that is less than a target.
//Example: [1,3,5,7,10], target=12 → (5,7)

$array = [1, 3, 5, 7, 10];
$target = 12;

$left = 0;
$right = count($array)-1;
$maxSum = -1;
$pair = [];

while($left <$right){

    $sum = $array[$left] + $array[$right];

    if($sum < $target){
        if($sum > $maxSum){
            $maxSum = $sum;
            $pair = [$array[$left] , $array[$right]];
        }
         $left++; 
        } else {
        $right--; 
        }
}
echo "Pair: (" . implode(", ", $pair) . "), Sum = $maxSum";
?>