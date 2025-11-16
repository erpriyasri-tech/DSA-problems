<?php
$array = [25,16,38,10,35,48,20,50];
$count = count($array);
// echo $count;
if($array[0]>$array[1]){
    $max1 = $array[0];
    $max2 = $array[1];
}else{
    $max2 = $array[0];
    $max1 = $array[1];
}
for($i=2; $i<$count; $i++){
    if($array[$i]>$max1){
        $max2 = $max1;
        $max1 = $array[$i];
    }elseif($array[$i>$max2]){
        $max2 = $array[$i];
    }
}

echo $max2;
?>                                                                                              