<?php
//Find maximum sum subarray of size k

$array = [3,8,2,5,7,6,12];
$count = count($array);
$maxx = 0;
$current =0;
$w = 4;
for($i=0; $i<$w; $i++){
 $current += $array[$i];
}
$maxx = $current;
 for ($j = 1; $j <= $count - $w; $j++) {
        $current = $current-$array[$j-1]+$array[$j+$w-1];
        
        if($current > $maxx){
            $maxx = $current;
        }
    }

echo $maxx;
?>