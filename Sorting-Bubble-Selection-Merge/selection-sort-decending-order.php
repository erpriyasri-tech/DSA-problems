<?php
//Modify Selection Sort to sort the array in descending order.
//Time Complexity O(n²) Space Complexity O(1)
$array = [64, 25, 12, 22, 11];
$count = count($array);

for($i=0; $i<$count; $i++){
    $maxIndex = $i;
    
    for($j=$i+1; $j<$count; $j++){
        if($array[$j]>$array[$maxIndex]){
            $maxIndex = $j;
        }
    }
    
    if($maxIndex !=$i){
        $temp = $array[$i];
        $array[$i] = $array[$maxIndex];
        $array[$maxIndex] = $temp;
    }
}

echo "decending order using Selection Sort " . implode(',', $array);
?>