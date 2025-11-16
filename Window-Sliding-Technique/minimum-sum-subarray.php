<?php
//Find minimum sum subarray of size k
function minimumSum($array ,$w){
$count = count($array);
$min = 0;
$current =0;

for($i=0; $i<$w; $i++){
    $current += $array[$i];
}
$min = $current;
for($i=1; $i<=$count- $w; $i++){
    $current = $current - $array[$i-1] + $array[$i + $w -1];
    if($current<$min){
        $min = $current;
    }
}

return $min;

}

$array = [3,8,2,5,7,6,12];
$w = 4;
echo "minimum sum subarray of size k ". minimumSum($array, $w);
?>