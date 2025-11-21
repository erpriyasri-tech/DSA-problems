<?php
//Write a function to check if a number is prime.

function checkPrime($num){
    if($num <= 1){
        return 'Number is not prime';
    }
    
    for($i=2; $i<=sqrt($num); $i++){
        if ($num % $i == 0) {
         return 'Number is not prime';
        }
    }
    return 'Number is prime';

        
}
$num = 10;
echo checkPrime($num);
?>