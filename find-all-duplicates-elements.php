<?php
//Time	O(n) Space	O(1)
$array = [1,2,3,4,5,5,2];

function findAllDuplicates(&$array) {
    $duplicates = [];

    for ($i = 0; $i < count($array); $i++) {
        $index = abs($array[$i]);

        if ($array[$index] < 0) {
            $duplicates[] = $index;
        } else {
            $array[$index] = -$array[$index];
        }
    }

    return $duplicates;
}

$result = findAllDuplicates($array);
echo "Duplicates: " . implode(" ", $result);

?>
