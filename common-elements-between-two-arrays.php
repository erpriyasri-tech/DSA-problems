<?php
//Find common elements between two arrays.

$array1 = [1,3,5,7,9];
$array2 = [2,4,3,7,12];

$common = [];

for($i=0; $i<count($array1); $i++){
    for($j=0; $j<count($array2); $j++){
        if($array1[$i] === $array2[$j]){
            //in-built function use
            // if(!in_array($array1[$i], $common)){
            //     $common[] = $array1[$i];
               
            // }
            //Manual Method 
            $alreadyExists = false;
            for($k=0; $k<count($common); $k++){
                if($common[$k] === $array1[$i]){
                    $alreadyExists = true;
                    break;
                }
            }
            if(!$alreadyExists){
                $common[] = $array1[$i];
            }

        }
        
    }
   
}
echo "Common elements: [" . implode(", ", $common) . "]";
?>