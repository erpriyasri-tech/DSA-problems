<?php
// Find all unique elements in the array.
//Time Complexity O(n²) Space Complexity O(n)
$array = [3, 5, 2, 6, 3, 8,2];
$count = count($array);
$unique = [];

for ($i = 0; $i < $count; $i++) {
    $isUnique = true;

    for ($j = 0; $j < $count; $j++) {
        if ($i != $j && $array[$i] == $array[$j]) {
            $isUnique = false; // found a duplicate
            break;
        }
    }

    if ($isUnique) {
        $unique[] = $array[$i];
    }
}

echo implode(',', $unique);
?>
