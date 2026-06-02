<?php
//Time Complexity: O(n) Space: O(n)
$array = [1, 2, 2, 3, 1, 4, 2,6,4,9,3, 5];

function countFrequency($array){
$count = count($array);
$freq = [];

for($i=0; $i<$count; $i++){
    $value = $array[$i];
    if(!isset($freq[$value])){
        $freq[$value] = 1;
    }else{
        $freq[$value]++;
    }
}
return $freq;
}

$result = countFrequency($array);
foreach($result as $key => $value){
    echo "Value: " . $key . " => Frequency: " . $value . "<br>";
}
?>