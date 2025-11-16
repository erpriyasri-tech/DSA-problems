<?php
//Remove duplicate elements from a sorted array.
//works only if the array is sorted

$array = [1, 1, 2, 2, 3, 3, 4, 5, 6, 8, 8];
$count = count($array);
$newArray = []; 
$newArray[] = $array[0];
for($i=1; $i<$count; $i++){
        if($array[$i] != $array[$i-1]){
            $newArray[] = $array[$i];
        }
}

echo implode(',', $newArray);
?>