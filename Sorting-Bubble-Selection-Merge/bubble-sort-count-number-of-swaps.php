<?php
//Count Number of Swaps
//Sort the array [5, 1, 4, 2, 8] using Bubble Sort and print the number of swaps performed.

$array = [5, 1, 4, 2, 8];
$count = count($array);
$swapCount = 0; // counter for total swaps

for($i=0; $i<$count-1; $i++){
    for($j=0; $j<$count -$i-1; $j++){
        if($array[$j] > $array[$j + 1]){
            $temp = $array[$j];
            $array[$j] = $array[$j +1];
            $array[$j +1] = $temp;
            $swapCount++;
            
        }
    }
}

echo "Bubble Sort in ascending order " . implode(',', $array). "<br>";
echo "Total number of swaps: " . $swapCount;
?>