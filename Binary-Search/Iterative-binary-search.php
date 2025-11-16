<?php
//Implement Binary Search (Iterative + Recursive).
function binarySearchIterative($arr, $x) {
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
       // $mid = intdiv($low + $high, 2);
        $mid = floor(($low + $high)/2);
        if ($arr[$mid] == $x) {
            return $mid; // Element found
        }

        if ($arr[$mid] < $x) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }

    return -1; // Element not found
}

$arr = [2, 4, 6, 8, 10, 12, 14];
$x = 10;
$result = binarySearchIterative($arr, $x);

if ($result != -1)
    echo "Element found at index: " . $result;
else
    echo "Element not found";
?>