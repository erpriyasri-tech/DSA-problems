<?php
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];


$row = count($matrix);
$column = count($matrix[0]);

echo "Row-wise sums:";
for($i=0; $i<$row; $i++){
   $sum = 0;
   for($j=0; $j<$column; $j++){
      $sum += $matrix[$i][$j] . ' ';
   } 
   echo "Row " . $i+1 . " " . $sum;
   echo "<br>";
}

echo "Column-wise sums:";
for($j=0; $j<$column; $j++){
   $sum = 0;
   for($i=0; $i<$row; $i++){
      $sum += $matrix[$i][$j] . ' ';
   } 
   echo "Row " . $j+1 . " " . $sum;
   echo "<br>";
}
?>


