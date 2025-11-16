<?php
//6. Find the index of a given element.

$array = [7, 2, 12, 4, 5, 6];
$count = count($array);
$element = 4; // 👈 element whose index we want to find
$foundIndex = -1; // default value if not found

for ($i = 0; $i < $count; $i++) {
    if($array[$i] == $element){
        $foundIndex = $i;
        break;
    }
}

if($foundIndex != -1){
echo "Element $element found at index $foundIndex";
}else{
    echo "Element $element not found in array";
}
?>
