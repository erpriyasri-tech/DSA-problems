<?php
$array = [
    ["id"=>1, "name"=>"Priya", "department"=>"HR"],
    ["id"=>2, "name"=>"Amit", "department"=>"IT"],
    ["id"=>3, "name"=>"Neha", "department"=>"HR"],
    ["id"=>4, "name"=>"Rohit", "department"=>"Finance"],
    ["id"=>5, "name"=>"Pooja", "department"=>"IT"]
];

function groupByKey($array, $key){
    $count = count($array);
    $grouped = [];

    for($i = 0; $i < $count; $i++){
        $value = $array[$i][$key];

        if(!isset($grouped[$value])){
            $grouped[$value] = [];
        }

        $grouped[$value][] = $array[$i];
    }

    return $grouped;
}

$result = groupByKey($array, 'department');

foreach ($result as $dept => $employees) {

    echo "<b>Department: " . $dept . "</b><br>";

    foreach($employees as $emp){
        echo $emp['name'] . "<br>";
    }

    echo "-------------------<br>";
}
?>
