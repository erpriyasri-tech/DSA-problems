<?php
//Find Kth Smallest Element Using Selection Sort
//Use Selection Sort logic to find the 3rd smallest element in the array.

$array = [7, 4, 10, 3, 20, 15];
$count = count($array);
$k = 3;
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

echo "Sorted Array using Selection Sort " . implode(',', $array). "<br>";
if($k <= $count && $k>0 ){
    echo "$k Smallest number in an array " . $array[$k - 1];
}else {
    echo "Invalid K value";
}
?>