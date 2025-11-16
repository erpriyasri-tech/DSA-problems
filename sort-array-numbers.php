<?php
//Sort an array of numbers without using sort() function
//[1,6,8,32,43,76,98]

$array = [76,98,32,1,43,6,8];
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