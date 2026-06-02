<?php
//Sort multi-dimensional array
//Time Complexity: O(n log n)
$array = [
    ["id"=>1, "name"=>"priya", "age"=>40],
    ["id"=>2, "name"=>"priyanka", "age"=>20],
    ["id"=>3, "name"=>"neha", "age"=>10],
    ["id"=>4, "name"=>"amit", "age"=>70]
    ];
    
    function mergeSort($array){
        $count = count($array);
        if($count<=1){
            return $array;
        }
        
        $mid = intval($count/2);
        $left = [];
        $right = [];
        
        for($i=0; $i<$mid; $i++){
            $left[] = $array[$i];
        }
        
        for($j=$mid; $j<$count; $j++){
            $right[] = $array[$j];
        }
        
        $left = mergeSort($left);
        $right = mergeSort($right);
        
      return  merge($left, $right);
    }
    
    function merge($left, $right){
        $countleft = count($left);
        $countright = count($right);
        
        $result = [];
        $i = $j = 0;
    
    while($i<$countleft && $j<$countright){
        if($left[$i]['age']<$right[$j]['age']){
            $result[] = $left[$i++];
        }else{
            $result[] = $right[$j++]; 
        }
    }
    
    while($i<$countleft){
        $result[] = $left[$i++];
    }
    while($j<$countright){
        $result[] = $right[$j++]; 
    }
    
    return $result;
    }
    
    $sorted = mergeSort($array);

    print_r($sorted);
?>