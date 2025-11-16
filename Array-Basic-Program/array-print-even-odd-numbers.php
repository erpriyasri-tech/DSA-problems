<?php
// Count even and odd numbers in an array.
// Print Even and Odd array

$array = [7, 2, 12, 4, 5, 6];
$count = count($array);
$even = [];
$odd = [];
$evencount =0;
$oddcount =0;
for ($i = 0; $i < $count; $i++) {
    $mod = $array[$i] % 2;
    if ($mod == 0) {
       $even[] = $array[$i];
       $evencount++;
    }else{
        $odd[] = $array[$i];
        $oddcount++;
    }

}

echo "Even Numbers: " . implode(',', $even) . "<br>";
echo "Odd Numbers: " . implode(',', $odd) . "<br>";

echo "Count of Even: " . $evencount . "<br>";
echo "Count of Odd: " . $oddcount;

?>

