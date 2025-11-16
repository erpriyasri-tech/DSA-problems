<?php
//Count the occurrence of each word in a string.
//output programming = 2 hello = 2 priya = 1

$string = 'programming hello priya hello programming';
$words = explode(" ", $string);
$count = count($words);
$visited = [];
for($i=0; $i<$count; $i++){
    $char = $words[$i];
    $frequency = 1;
    if (in_array($char, $visited)) {
        continue;
    }
    for($j=$i+1; $j<$count; $j++){
       if($words[$i] == $words[$j]){
            $frequency++;
       }
   }
 echo $char . " = " . $frequency . "<br>";
 $visited[] = $char;
}

?>