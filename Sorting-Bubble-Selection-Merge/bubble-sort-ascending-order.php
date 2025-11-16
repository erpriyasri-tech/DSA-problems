<?php
//Write a program to sort the array [5, 1, 4, 2, 8] using Bubble Sort in ascending order.
$array = [5, 1, 4, 2, 8];
$count = count($array);

for($i=0; $i<$count-1; $i++){
    for($j=0; $j<$count -$i-1; $j++){
        if($array[$j] < $array[$j + 1]){
            $temp = $array[$j];
            $array[$j] = $array[$j +1];
            $array[$j +1] = $temp;
            
        }
    }
}

echo "Bubble Sort in ascending order " . implode(',', $array);
?>