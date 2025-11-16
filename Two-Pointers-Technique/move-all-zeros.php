<?php
//Move all zeros to the end of an array while maintaining the order of other elements.
//Example: [0,1,0,3,12] → [1,3,12,0,0]

$array =  [0,1,0,3,12]; 
$count = count($array);
$pos = 0;
for($i=0; $i<$count;$i++){
    if($array[$i] != 0){
       $array[$pos] =  $array[$i];
       $pos ++;
    }
}

while ($pos < $count) {
    $array[$pos] = 0;
    $pos++;
}
echo implode(",", $array);




?>