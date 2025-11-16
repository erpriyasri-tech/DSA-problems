<?php
//2. Implement Linear Search to find a target.
// Time Complexity: O(n)
// Space Complexity O(1) (constant space)
//using only a few scalar variables ($i, $loc, $count, $target)
//→ No extra array or recursion.

$array = [2, 5, 8, 12, 16, 23, 38, 56, 72, 91];
$count = count($array);

$target = 23;
$loc = -1;
for($i=0; $i<$count; $i++){
   if($array[$i] == $target){
       $loc = $i;
       break;
   }
}
if ($loc != -1) {
    echo "Element $target found at index $loc";
} else {
    echo "Element not found";
}
?>