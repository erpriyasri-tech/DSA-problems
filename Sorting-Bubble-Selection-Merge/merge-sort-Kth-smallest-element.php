<?php
//📊 5. Find the Kth Smallest Element Using Merge Sort
// Given an array and an integer k, find the kth smallest element using merge sort.

function mergeSort($array){
   $count = count($array);
   
   if ($count <= 1) {
        return $array;
    }
    
   $mid = floor($count/2); 
   $left =[];
   $right = [];
   
   for($i=0; $i<$mid; $i++){
      $left[$i] = $array[$i]; 
   }
   
   for($i=$mid; $i<$count; $i++){
       $right[$i-$mid] = $array[$i]; 
   }
   
    $left = mergeSort($left);
    $right = mergeSort($right);
    return merge($left, $right);
   
}

function merge($left, $right){
    
    $i = $j = $k = 0;
    $leftCount = count($left); 
    $rightCount = count($right);
    $result = [];
    while($i<$leftCount && $j<$rightCount){
            if($left[$i]<$right[$j]){
                $result[$k++] = $left[$i++];
            }else{
                 $result[$k++] = $right[$j++];
            }
    }
    
    while($i<$leftCount){
        $result[$k++] = $left[$i++];
    }
     while($j<$rightCount){
        $result[$k++] = $right[$j++];
    }
    return $result;
}
$array = [38, 27, 43, 3, 9, 82, 10];
$k = 3;
$sorted = mergeSort($array); 
echo "Sorted Array: " . implode(", ", $sorted). "<br>";

if($k<=count($array) && $k>0){
   echo "$k smallest element " . $sorted[$k-1] ;
}else{
    echo "Invalid K value";
}
?>