<?php
//Sum of all elements in a 2D matrix
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$row = count($matrix);
$column = count($matrix);
$sum = 0;
for($i=0; $i<$row; $i++){
    
   for($j=0; $j<$column; $j++){
      $sum += $matrix[$i][$j];
       
   } 
}

echo "Sum of all elements = $sum";
?>