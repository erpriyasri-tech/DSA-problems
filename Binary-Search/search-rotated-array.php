<?php
// 5. Search element in a sorted but rotated array.
// ✔ Time Complexity = O(log n)
// ✔ Space Complexity = O(1)

function searchRotated($arr, $x){
    $start = 0;
    $end = count($arr) -1;
    
    while($start <= $end){
        $mid = floor(($start + $end)/2);
        
        if($arr[$mid]==$x){
            return $mid;
        }
        if($arr[$start]<= $arr[$mid]){
            if ($x >= $arr[$start] && $x < $arr[$mid]) {
                $end = $mid -1;
            }else{
                $start = $mid + 1;
            }
        }else{
            if ($x > $arr[$mid] && $x <= $arr[$end]) {
                $start = $mid + 1;
            }else{
                $end = $mid - 1;
            }
        }
    }
    return -1;
}

// Example
$arr = [12, 14, 2, 4, 6, 8, 10];
$x = 6;
$result = searchRotated($arr, $x);

echo ($result != -1) ? "Element found at index $result" : "Not found";
?>
