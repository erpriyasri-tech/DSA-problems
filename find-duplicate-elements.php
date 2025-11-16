<?php
//Find duplicate elements in an array
//Example: [1,2,3,2,4,1,8,6,5,3,8] → [1,2,3,8]

$array = [1,2,3,2,4,1,8,6,5,3,8];
$count = count($array);
$duplicate = [];
for($i=0; $i<$count; $i++){
    for($j=$i+1; $j<$count; $j++){
        if($array[$i] == $array[$j]){
            if (!in_array($array[$i], $duplicate)) {
            $duplicate[] = $array[$i];
            }
       }
   }
    
}

echo "[" . implode(",", $duplicate). "]";

?>