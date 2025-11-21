<?php
//Remove duplicate charecters from a string.
$string = 'Programming';
$result = "";
$seen = [];

for ($i = 0; $i < strlen($string); $i++) {
    $ch = $string[$i];

    if (!isset($seen[$ch])) {
        $result .= $ch;
        $seen[$ch] = true;
    }
}

echo $result;
?>
