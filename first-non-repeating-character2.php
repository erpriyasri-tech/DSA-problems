<?php
//Find the first non-repeating character in a string.
//First non-repeating character is: S
//⏱ Time Complexity: O(n) 

$str = "Srivastava";
function firstNonRepeating($str){
$count = strlen($str);
$freq = [];

for($i=0; $i<$count; $i++){
    $char = $str[$i];
    $freq[$char] = ($freq[$char] ?? 0) +1;
}
for($i=0; $i<$count; $i++){
    if($freq[$str[$i]]==1){
        return $str[$i];
    }
}
return null;
}
echo firstNonRepeating($str);



<?php
$str = "abcabcbb";
function longest($str){
    $count = strlen($str);
    $map = [];
    $macLength = 0;
    $start = 0;
    
    for($end=0; $end<$count; $end++){
        $char = $str[$end];
        
        if(isset($map[$char]) && $map[$char]>= $start){
            $start = $map[$char] +1;
        }
        
        $map[$char] = $end;
        $macLength = max($macLength, $end-$start+1);
    }
    return $macLength;
}
echo longest($str);
?>
?>