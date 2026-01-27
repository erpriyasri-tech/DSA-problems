<?php
//📌 Write PHP code to merge two arrays and remove duplicates.
$array1 = [10,20,30];
$array2 = [3,40,10,50,60,20,29];
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
$unique = [];
$seen = [];

foreach($array3 as $value){
    if(!isset($seen[$value])){
        $unique[] = $value;
        $seen[$value] = true;
}
}

echo "[".implode(",", $unique) . "]";
?>