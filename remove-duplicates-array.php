<?php
//Remove duplicate values from an array in php
//Time Complexity: O(n)
$arr = [10, 20, 10, 30, 20];
$unique = [];
$seen = [];

foreach($arr as $value){
    if(!isset($seen[$value])){
        $unique[] = $value;
        $seen[$value] = true;
    }
}


echo "[" . implode(",", $unique). "]";
?>