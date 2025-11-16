<?php
//Find maximum average subarray of size k
function maximumAva($array ,$w){
$count = count($array);
$average = 0;
$current =0;

for($i=0; $i<$w; $i++){
    $current += $array[$i];
}
$average = $current/$w;

for($i=1; $i<=$count-$w; $i++){
    $current = $current - $array[$i-1] + $array[$i +$w - 1];
    $currentAverage = $current/$w;
    if($currentAverage > $average){
        $average = $currentAverage;
    }
}

return $average; 

}

$array = [3,8,2,5,7,6,12];
$w = 4;
echo "Maximum average subarray of size k ". maximumAva($array, $w);
?>