<?php
// Merge two sorted arrays into one sorted array
//output [1,2,3,4,5,6,7,8,10]
$array1 = [1, 3, 5, 7];
$array2 = [2, 4, 6, 8, 10];

$n1 = count($array1);
$n2 = count($array2);
$i = 0;
$j = 0;
$merged = [];

while($i<$n1 && $j<$n2){
    if($array1[$i] <= $array2[$j]){
        $merged[] = $array1[$i];
        $i++;
    }else{
         $merged[] = $array2[$j];
         $j++;
    }
}

while($i < $n1){
    $merged[] = $array1[$i];
    $i++;
} 

while($j < $n2){
    $merged[] = $array2[$j];
    $j++;
}

echo "[".implode(",", $merged). "]";



?>