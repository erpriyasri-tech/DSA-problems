<?php
// Find factorial of a number (Factorial using a Loop (Iterative method)).
// output 120

function factorialLoop($num){
$fact = 1;
for($i=$num; $i>0; $i--){
    $fact = $fact * $i;
}
return $fact;
}


echo "Factorial (Loop) of 5 = " . factorialLoop(5); 

?>