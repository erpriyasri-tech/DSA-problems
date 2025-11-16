<?php
$array = [2, 5, 8, 12, 16, 23, 38, 56, 72, 91];
$count = count($array);
$target = 23;
$first = -1;
$start = 0;
$end = $count-1;
while($start<= $end){
    $mid = floor($start + $end / 2);
   if($array[$mid] < $target){
      $start = $mid + 1;   
   }elseif($array[$mid] > $target){
       $end = $mid - 1; 
   }else{
       $first = $mid;
   }
}
if ($first != -1) {
    echo "Element $target found at index $first";
} else {
    echo "Element not found";
}
?>