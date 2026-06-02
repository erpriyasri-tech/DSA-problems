<?php

//Remove multi-dimensional array of associative arrays (records).

$array = [
    ["id"=>1, "name"=>"Priya", "age"=>25],
    ["id"=>2, "name"=>"Amit", "age"=>30],
    ["id"=>3, "name"=>"Neha", "age"=>25],
    ["id"=>4, "name"=>"Rohit", "age"=>35],
    ["id"=>5, "name"=>"Pooja", "age"=>30]
];

function removeDuplicates($array, $key){
  
$seen = [];
$unique = [];

foreach ($array as $value) {
    if(!isset($seen[$value[$key]])){
        $seen[$value[$key]] = true;
        $unique[] = $value;
    }
}
 return $unique;   // ✅ You also forgot return

}
?>