<?php
// 6. Find the smallest element in a rotated sorted array.
// 
function findMin($arr){
    $start = 0;
    $end = count($arr) -1;
    
    if ($arr[$start] <= $arr[$end]) {
        return $arr[$start];
    }
    while($start <= $end){
        $mid = floor(($start + $end)/2);
        
        if($mid >0 && $arr[$mid] < $arr[$mid]-1){
            return $arr[$mid];
          
        } 
        if ($arr[$mid] > $arr[$mid + 1]) {
            return $arr[$mid + 1];
        }
        
        // Move in the direction of the unsorted part
        if ($arr[$mid] >= $arr[$start]) {
            // Left part sorted, go right
            $start = $mid + 1;
        } else {
            // Right part sorted, go left
            $end = $mid - 1;
        }
    }
    return -1;
}

// Example
$arr = [12, 14, 2, 4, 6, 8, 10];
$min = findMin($arr);

echo "Smallest element is: ".$min;
?>
