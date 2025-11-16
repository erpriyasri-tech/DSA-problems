<?php
//Sort the given array in ascending order using Selection Sort.
$array = [64, 25, 12, 22, 11];
$count = count($array);

for($i=0; $i<$count; $i++){
    $minIndex = $i;
    
    for($j=$i+1; $j<$count; $j++){
        if($array[$j]<$array[$minIndex]){
            $minIndex = $j;
        }
    }
    
    if($minIndex !=$i){
        $temp = $array[$i];
        $array[$i] = $array[$minIndex];
        $array[$minIndex] = $temp;
    }
}

echo "ascending order using Selection Sort " . implode(',', $array);
?>