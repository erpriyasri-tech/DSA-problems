<?php
//1. Implement Binary Search (sorted array).
// Time Complexity: O(log n) (divides range in half each time) Space Complexity:O(1) (only a few variables)

$array = [2, 5, 8, 12, 16, 23, 38, 56, 72, 91];
$count = count($array);
$start = 0;
$end = $count-1;
$loc = -1;
$target = 56;
while($start <= $end){
    $mid = floor(($start + $end) /2);
    if($array[$mid] < $target){
        $start = $mid + 1;
    }elseif($array[$mid] > $target){
        $end = $mid - 1;
    }else{
       $loc = $mid;
       break;
    }
}
if ($loc != -1) {
    echo "Element $target found at index $loc";
} else {
    echo "Element not found";
}
?>