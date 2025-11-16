<?php
//Check if an array contains a subarray with sum = 0

function hasZeroSumSubarray($arr) {
    $n = count($arr);
    $sum = 0;
    $set = [];  // to store prefix sums

    for ($i = 0; $i < $n; $i++) {
        $sum += $arr[$i];

        // Case 1: sum is zero
        if ($sum == 0) {
            return true;
        }

        // Case 2: sum already seen before
        if (in_array($sum, $set)) {
            return true;
        }

        // store prefix sum
        $set[] = $sum;
    }

    return false;
}

// Test
$arr = [4, 2, -3, 1, 6];
if (hasZeroSumSubarray($arr)) {
    echo "Yes, there is a subarray with sum = 0";
} else {
    echo "No subarray with sum = 0";
}
?>
