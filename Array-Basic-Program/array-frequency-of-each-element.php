<?php
//9. Find the frequency of each element in an array.
// Time complexity: O(n²) (because of nested loops)

$array = [2, 3, 2, 5, 3, 2, 4, 5];
$count = count($array);
$visited = [];

for($i=0; $i<$count; $i++){
 if(isset($visited[$i]))
 continue;
$frequency =1;
for($j=$i+1; $j<$count; $j++ ){
    if($array[$i] == $array[$j]){
        $frequency++;
        $visited[$j] = true;
    }
} 
echo "Element {$array[$i]} appears {$frequency} times.<br>";
 
}


?>