<?php
$str = 'Priya';
$length = strlen($str);
$reverse = "";
// echo $length;

for($i=$length-1; $i>=0; $i--){
   $reverse .= $str[$i];
}

echo $reverse ;

?>