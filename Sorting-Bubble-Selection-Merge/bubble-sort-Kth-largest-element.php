<?php
//Find Kth largest Element Using Bubble Sort
//Using Bubble Sort, find the 3rd largest element in the array [12, 5, 8, 7, 9]
$array = [12, 5, 8, 7, 9];
$count = count($array);
$k =3;
for($i=0; $i<$count-1; $i++){
    for($j=0; $j<$count -$i-1; $j++){
        if($array[$j] > $array[$j + 1]){
            $temp = $array[$j];
            $array[$j] = $array[$j +1];
            $array[$j +1] = $temp;
            
        }
    }
}

echo "Sorted Array (Descending): " . implode(',', $array) . "<br>";

if($k <=$count &&  $k>0){
  echo "$k"."th Largest Element: " . $array[$k - 1];
}else {
    echo "Invalid K value";
}


?>