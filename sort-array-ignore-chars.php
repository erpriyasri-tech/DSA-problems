<?php
//Sort an array of numbers without using sort() function ignore charecters
//[-1,2,2,4,5,5,6]

$a = ['x', 5, -1, 'z', 2, 4, 't', 2, 6, 5];

$array = [];

foreach ($a as $val) {
    if(is_numeric($val)){
        $array[] = $val;
    }
}
$count = count($array);
for($i=0; $i<$count; $i++){
    for($j=$i+1; $j<$count; $j++){
        if($array[$i]>$array[$j]){
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
echo "[". implode(",", $array) . "]";
?>