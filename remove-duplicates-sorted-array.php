<?php
//Remove duplicates from a sorted array.
//[1,2,3,4,5,6,7,8]

$array = [1,1,2,2,3,3,4,5,5,6,7,7,8]; 
$count = count($array);

$unique = [];
$unique[] = $array[0];

for($i=1; $i<$count; $i++){
        if($array[$i] != $array[$i -1]){
            $unique[] = $array[$i];
        }
    
}

echo "[". implode(",", $unique). "]";

?>