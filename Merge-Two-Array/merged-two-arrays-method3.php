<?php
//📌 Write PHP code to merge two arrays and sort array.

$array1 = [10,20,30];
$array2 = [3,40,50,60,29];
$a = count($array1);
$b = count($array2);
$c = $a + $b;

$array3 = [];

for($i=0; $i<$a; $i++){
    $array3[$i] = $array1[$i];
}
for($i=0; $i<$b; $i++ ){
    $array3[$a+$i] = $array2[$i];
}

$count = count($array3);
for($i=0; $i<$count; $i++){
    for($j=$i+1; $j<$count; $j++){
        if($array3[$i]>$array3[$j]){
            $temp = $array3[$i];
            $array3[$i] = $array3[$j];
            $array3[$j] = $temp;
        }
    }
}
echo "[".implode(",", $array3) . "]";
?>