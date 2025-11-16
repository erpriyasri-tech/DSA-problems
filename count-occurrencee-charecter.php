<?php
//Count the occurrence of each word in a string.
//p=1 r=2 o=1 g=2 a=1 m=2 i=1 n=1
$string = 'programming';
$count = strlen($string);
$visited = [];
for($i=0; $i<$count; $i++){
    $char = $string[$i];
    $frequency = 1;
    if (in_array($char, $visited)) {
        continue;
    }
    for($j=$i+1; $j<$count; $j++){
       if($string[$i] == $string[$j]){
            $frequency++;
       }
   }
 echo $char . " = " . $frequency . "<br>";
 $visited[] = $char;
}

?>