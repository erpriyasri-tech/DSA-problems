<?php
//Sort Names Alphabetically Using Selection Sort
//Given an array of strings, sort them alphabetically using Selection Sort.

$array = ["Mango", "Apple", "Banana", "Cherry"];
$count = count($array);

for($i=0; $i<$count-1; $i++){
   $minIndex = $i;
    for($j=$i+1; $j<$count; $j++){
        if($array[$j]<$array[$minIndex]){
        $minIndex = $j;
        }
    }
    
    if($minIndex != $i){
         $temp = $array[$i];
        $array[$i] = $array[$minIndex];
        $array[$minIndex] = $temp;
    }
   
}

echo "Sorted (Alphabetically): [" . implode(',', $array). "] ";

?>