<?php
//Print matrix in row-wise & column-wise order
//Row-wise: left → right
//Column-wise: top → bottom
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];


$row = count($matrix);
$column = count($matrix[0]);

echo "Row-wise: ";
for($i=0; $i<$row; $i++){
   for($j=0; $j<$column; $j++){
      echo $matrix[$i][$j] . ' ';
       
   } 
}

echo "<br>Column-wise: ";
for($j=0; $j<$column; $j++){
   for($i=0; $i<$row; $i++){
      echo $matrix[$i][$j] . ' ';
       
   } 
}

?>


