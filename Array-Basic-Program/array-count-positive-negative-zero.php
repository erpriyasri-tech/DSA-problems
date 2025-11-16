<?php
//5. Count positive, negative, and zero values.
$array = [5, -2, 0, 9, -4, 0, 7, -1];

$count = count($array);

// Initialize counters
$positive = 0;
$negative = 0;
$zero = 0;

for ($i = 0; $i < $count; $i++) {
    if ($array[$i] > 0) {
        $positive++;
    } elseif ($array[$i] < 0) {
        $negative++; 
    } else {
        $zero++;
    }
}

echo "Count of Positive numbers: $positive<br>";
echo "Count of Negative numbers: $negative<br>";
echo "Count of Zeros: $zero";
?>
