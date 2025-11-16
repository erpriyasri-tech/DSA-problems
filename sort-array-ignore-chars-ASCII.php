<?php
//We can detect characters manually using their ASCII values:
//'0' to '9' → ASCII 48–57
//'A' to 'Z' → ASCII 65–90
//'a' to 'z' → ASCII 97–122
//Sort an array of numbers without using sort() function ignore charecters
//[-1,2,2,4,5,5,6]

$a = ['x', 5, -1, 'z', 2, 4, 't', 2, 6, 5];

$array = [];

foreach ($a as $val) {
    $strval = (string)$val;
    $isnumber = true;
    for($i=0; $i<isset($strval[$i]); $i++){
        $ascii = ord($strval[$i]);

        if(!(($ascii >=48 && $ascii<=57) || $ascii == 45)){
            $isnumber = false;
            break;
        }
    }+

    if($isnumber){
        $array[] = $strval;
    }
}
$count = count($array);
for($i=0; $i<$count; $i++){
    for($j=$i+1; $j<$count; $j++){
        if($array[$i]>$array[$j]){
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
echo "[". implode(",", $array) . "]";



?>