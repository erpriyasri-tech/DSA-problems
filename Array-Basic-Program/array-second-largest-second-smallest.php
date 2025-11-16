<?php
//Find the second largest and second smallest element.
//Technique used Linear scan
$array = [7, 2, 12, 4, 5, 6];
$count = count($array);

$firstMax = $secondMax = $array[0];
$firstMin = $secondMin = $array[0];

for($i=1; $i<$count; $i++){
    if($array[$i] > $firstMax){
        $secondMax = $firstMax;
        $firstMax = $array[$i];
    }elseif($array[$i]> $secondMax && $array[$i] != $firstMax){
         $secondMax = $array[$i];
    }
    
    if($array[$i]< $firstMin){
        $secondMin = $firstMin;
        $firstMin = $array[$i];
    }elseif($array[$i]< $secondMin  && $array[$i] != $firstMin){
        $secondMin = $array[$i];
    }
}
echo "Second Largest: " . $secondMax . "<br>";
echo "Second Smallest: " . $secondMin;

?>