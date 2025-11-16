<?php
//3. Find the maximum and minimum element.
$array = [7, 2, 12, 4, 5, 6];
$count = count($array);

// Initialize max and min with the first element
$max = $array[0];
$min = $array[0];

for ($i = 1; $i < $count; $i++) {
    if ($array[$i] > $max) {
        $max = $array[$i];
    }

    if ($array[$i] < $min) {
        $min = $array[$i];
    }
}

echo "Maximum " . $max . " Minimum " . $min;
?>
