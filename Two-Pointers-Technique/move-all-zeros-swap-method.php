<?php
//Move all zeros to the end of an array while maintaining the order of other elements.
//Example: [0,1,0,3,12] → [1,3,12,0,0]
//Using Two-Pointer Swap

$array =  [0,1,0,3,12]; 
$count = count($array);

$left = 0;

for($right=0; $right<$count; $right++){
    if($array[$right] != 0){
        $temp = $array[$left];
        $array[$left] = $array[$right];
        $array[$right] = $temp;
        $left ++;
    }
}

echo implode(",", $array);
?>