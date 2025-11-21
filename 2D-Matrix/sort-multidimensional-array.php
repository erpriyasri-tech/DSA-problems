<?php
//Sort a multidimensional array by value.

$matrix = [
    ["name" => "Jaya",   "age" => 20],
    ["name" => "Ankita", "age" => 26],
    ["name" => "Neha",   "age" => 8],
];

$n = count($matrix);

for($i=0; $i<$n; $i++){
    for($j=$i+1; $j<$n; $j++){
        if($matrix[$i]['age']>$matrix[$j]['age']){
            $temp = $matrix[$i];
            $matrix[$i] = $matrix[$j];
            $matrix[$j] = $temp;
        }
    }
}

echo json_encode($matrix);
?>