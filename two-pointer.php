<?php
//$left and $right should be indexes, not values
//If sum < target, increase $left++ (to get a bigger number).
//If sum > target, decrease $right-- (to get a smaller number).

$array = [1,2,3,5,7,10,11,15];
$left = 0;
$right = count($array)-1;
$target = 15;
while($left<$right){
    $current_sum = $array[$left] + $array[$right];
if($current_sum == $target){
    echo "Pair Found (" . $array[$left]."," .$array[$right] . ")";
    break;
}
elseif($current_sum > $target){
  $right-- ;
}else{
  $left++ ;
}
}
?>