<?php
// Find factorial of a number (using recursion & loop).

function factorialRecursion($num){
    if($num==0 || $num==1){
        return 1;
    }

    return $num * factorialRecursion($num-1);
    
}
echo "Factorial (Recursion) of 5 = " . factorialRecursion(5);

?>