<?php
//15. Find the difference between max and min element.
//Time Complexity = O(n)
//You loop once through all n elements → O(n)
//✅ You’re doing only one pass, checking each element once.
//✅ No nested loops.
//Space Complexity = O(1)

$array = [4, 5, 8, 2,12, 16, 23, 38, 56, 72, 91];
$count = count($array);

$max = $array[0];
$min = $array[0];
$diff = 0;
for($i= 1; $i<$count; $i++){
    if($array[$i] > $max){
        $max = $array[$i];
    }elseif($array[$i] < $min){
        $min = $array[$i];
    }
}
$diff = $max-$min;
echo "Maximum Number in an array: " . $max . 
     " and Minimum Number in an array: " . $min . 
     " | Difference: " . $diff;

?>