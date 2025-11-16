<?php
//12. Print elements at even and odd positions separately.
$array = [10, 20, 30, 40, 50, 60];
$count = count($array);

$evenPos = [];
$oddPos = [];

for ($i = 0; $i < $count; $i++) {
    if ($i % 2 == 0) {           // even index
        $evenPos[] = $array[$i];
    } else {                     // odd index
        $oddPos[] = $array[$i];
    }
}

echo "Elements at even positions: " . implode(', ', $evenPos) . "<br>";
echo "Elements at odd positions: " . implode(', ', $oddPos);
?>
