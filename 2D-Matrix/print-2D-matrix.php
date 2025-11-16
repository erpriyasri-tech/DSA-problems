<?php
//Print a 2D matrix
//Input: [[1,2,3],[4,5,6],[7,8,9]]
//Output: print each row & element.

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$row = count($matrix);
$column = count($matrix[0]);

for($i=0; $i<$row; $i++){
   for($j=0; $j<$column; $j++){
      echo $matrix[$i][$j] . ' ';
       
   } 
       echo "<br>"; // move to next line after each row
 
}

?>