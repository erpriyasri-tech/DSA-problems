<?php
//Find missing number in a sequence
//Example: [1,2,3,5,6] → Missing → 4

$numbers = [1,2,3,5,6];
$count = count($numbers);

for($i=1; $i<$count; $i++){
    if(!in_array($i, $numbers)){
         echo "Missing number is: $i";
        break;
    }
}

?>