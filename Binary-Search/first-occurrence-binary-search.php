<?php
function firstOccurrence($arr, $x) {
    $start = 0;
    $end = count($arr) - 1;
    $result = -1;
    while ($start <= $end) {
       // $mid = intdiv($low + $high, 2);
        $mid = floor(($start + $end)/2);
        if ($arr[$mid] == $x) {
            $result = $mid; // Element found
            $end = $mid - 1;
        }elseif($arr[$mid] <$x){
            $start = $mid + 1;
        }else{
            $end = $mid - 1;
        }
    }

 return $result; // Element not found
}

$arr = [2, 4, 4, 4, 6, 8];
$x = 4;
$result = firstOccurrence($arr, $x);

if ($result != -1)
    echo "First occurrence of $x is at index: " . $result;
else
    echo "Element not found";
?>