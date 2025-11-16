<?php
//Count occurrences of a number in a sorted array.
function firstOccurrence($arr, $x) {
    $start = 0;
    $end = count($arr) - 1;
    $result = -1;

    while ($start <= $end) {
        $mid = floor(($start + $end) / 2);

        if ($arr[$mid] == $x) {
            $result = $mid;
            $end = $mid - 1; // move left to find earlier occurrence
        } elseif ($arr[$mid] < $x) {
            $start = $mid + 1;
        } else {
            $end = $mid - 1;
        }
    }

    return $result;
}

function lastOccurrence($arr, $x) {
    $start = 0;
    $end = count($arr) - 1;
    $result = -1;

    while ($start <= $end) {
        $mid = floor(($start + $end) / 2);

        if ($arr[$mid] == $x) {
            $result = $mid;
            $start = $mid + 1; // move right to find later occurrence
        } elseif ($arr[$mid] < $x) {
            $start = $mid + 1;
        } else {
            $end = $mid - 1;
        }
    }

    return $result;
}

function countOccurrences($arr, $x) {
    $first = firstOccurrence($arr, $x);
    if ($first == -1) {
        return 0; // element not found
    }
    $last = lastOccurrence($arr, $x);
    return ($last - $first + 1);
}

// Example
$arr = [2, 4, 4, 4, 6, 8];
$x = 4;
$count = countOccurrences($arr, $x);

echo "Element $x occurs $count times in the array.";
?>
