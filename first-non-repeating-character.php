<?php
//Find the first non-repeating character in a string.
//First non-repeating character is: w

$string = 'swiss';
$count = strlen($string);

for($i=0; $i<$count; $i++){
    $repeat = false;
    for($j=0; $j<$count; $j++){
       if($i != $j && $string[$i] == $string[$j]){
           $repeat = true;
           break;
       }
   }
   if (!$repeat) {
        echo "First non-repeating character is: " . $string[$i];
        $found = true;
        break;
    } 
}

?>