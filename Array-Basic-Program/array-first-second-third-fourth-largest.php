<?php
////Find the third largest and fourth largest element.

$array = [88,90,54,77,12];
$count = count($array);

$firstMax = $secondMax = $thirdMax = $fourthMax = PHP_INT_MIN;
$firstMin = $secondMin = $array[0];

for($i=0; $i<$count; $i++){
    if($array[$i] > $firstMax){
        $fourthMax = $thirdMax;
        $thirdMax = $secondMax;
        $secondMax = $firstMax;
        $firstMax = $array[$i];
    }elseif($array[$i]> $secondMax && $array[$i] != $firstMax){
         $fourthMax = $thirdMax;
         $thirdMax = $secondMax;
         $secondMax = $array[$i];
    }elseif($array[$i]>$thirdMax && $array[$i] != $secondMax && $array[$i] != $firstMax){
        $fourthMax = $thirdMax;
        $thirdMax = $array[$i];
    }elseif($array[$i]>$fourthMax && $array[$i] != $thirdMax && $array[$i] != $secondMax && $array[$i] != $firstMax){
                $fourthMax = $array[$i];
    }
    
}

echo 'First Max ' .$firstMax. ' Second Max ' .$secondMax. ' ThirdMax ' . $thirdMax. ' Fourth Max ' . $fourthMax;
?>