<?php
// Rotate an array k times.
// [3,4,5,1,2]
//First iteration ($i = 4)
//$a[4] = $a[3];   //  last element becomes 4 array [1, 2, 3, 4, 4]
// Second iteration ($i = 3)
//$a[3] = $a[2]; // array [1, 2, 3, 3, 4]

$array = [1,2,3,4,5];
$k = 3;
$count = count($array);

for($i=1; $i<=$k; $i++){

    $last = $array[$count - 1];

    for($j=$count -1 ; $j>0; $j--){
        $array[$j] = $array[$j - 1];
    }

    $array[0] = $last;

}

echo "[". implode(",", $array) . "]";
?>