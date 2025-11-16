<?php
//Transpose of a matrix
//Swap matrix[i][j] ↔ matrix[j][i]
//Example:
//[1 2 3] → [1 4 7]
//[4 5 6] → [2 5 8]
//[7 8 9] → [3 6 9]
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];


$row = count($matrix);
$column = count($matrix[0]);


echo "<br>Transpose-Matrix: ";
for($j=0; $j<$column; $j++){
   for($i=0; $i<$row; $i++){
      echo $matrix[$i][$j] . ' ';
       
   } 
   echo "<br>";
}

?>


