<?php
//Count Number of Swaps
//Implement Selection Sort and count how many swaps are made.

$array = [29, 10, 14, 37, 14];
$count = count($array);
$swapCount =0;
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
        $swapCount++;
    }
}

echo "Sorted Array using Selection Sort " . implode(',', $array). "<br>";
echo "Total number of swaps: " . $swapCount;
?>