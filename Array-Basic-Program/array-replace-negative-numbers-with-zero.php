<?php
//10. Replace all negative numbers with 0
//Time Complexity: O(n)

$array = [-2, 3, -2, 5, 3, 2, -4, 5];
$count = count($array);

for($i=0; $i<$count; $i++){
if($array[$i] < 0){
  $array[$i] = 0;
}
}

echo "[".implode(',', $array). "]";
?>