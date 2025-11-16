<?php
//Write a function to generate Fibonacci series up to n terms
//Output 0, 1, 1, 2, 3, 5, 8, 13, 21, 34
//public function is only valid inside a class in PHP Outside a class, you should just use function
//Each number = sum of the previous two numbers.
//It starts with 0 and 1 by default.
   
 function fibonacciSeries($num){
    $first = 0;
    $second = 1;
    
    for($i=0; $i<$num; $i++){
       if ($i == 0) {
        echo $first;
       } elseif ($i == 1) {
        echo ", " . $second;
       } else {
        $next = $first + $second;
        echo ", " . $next;

        $first = $second;
        $second = $next;
      }
    }
}

fibonacciSeries(10);
?>