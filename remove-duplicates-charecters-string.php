<?php
$string = 'Programming';
$length = strlen($string);

$result = "";

for($i=0; $i<$length; $i++){

    $ch = $string[$i];
    $already = false;
    for($j=0; $j<strlen($result); $j++){
        if($result[$j] ==  $ch ){
         $already = true;
            break;
       }
    }
 if(!$already){
    $result .= $ch;
 }   
}

 echo $result;
?>