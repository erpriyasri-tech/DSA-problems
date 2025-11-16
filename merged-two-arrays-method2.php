<?php
// Merged two array and print sorted order

$array1 = [1, 3, 5, 7];
$array2 = [2, 4, 6, 8, 10];

$merged = [];

for($i =0; $i<count($array1); $i++ ){
    $merged [] = $array1[$i];
}
for($i =0; $i<count($array2); $i++ ){
    $merged [] = $array2[$i];
}

$count = count($merged);
for($i=0; $i<$count; $i++){
    for($j=$i+1; $j<$count; $j++){
        if($merged[$i] > $merged[$j]){
            $temp = $merged[$i];
            $merged[$i]= $merged[$j];
            $merged[$j] = $temp;
        }
    }
}


echo implode("," , $merged);

?>