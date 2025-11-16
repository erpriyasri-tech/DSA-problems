<?php
$string  = 'Priya you are intelligent girl';
$words = explode(" ", $string);

$longestword = "";
$maxLength = 0;

foreach($words as $word){
    $length = strlen($word);
    if($length > $maxLength){
        $maxLength = $length;
        $longestword = $word;
    }
}
echo "Longest word  " . $longestword . " Length " . $maxLength;
?>