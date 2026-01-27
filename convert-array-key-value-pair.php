<?php
//📌 Convert this array into key-value pair:
// Input [ ['id'=>1,'name'=>'A'], ['id'=>2,'name'=>'B'] ]
// Output [1 => 'A', 2 => 'B']
$data = [
    ['id' => 1, 'name' => 'A'],
    ['id' => 2, 'name' => 'B']
];

$result = [];

foreach ($data as $item) {
    $result[$item['id']] = $item['name'];
}

print_r($result);

?>