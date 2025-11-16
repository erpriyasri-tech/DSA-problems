<?php
// Count vowels and consonants in a string.
// Output for "Hello World"
//Vowels = e, o, o → 3
//Consonants = h, l, l, w, r, l, d → 7

$string = 'Hello World';
$str = strtolower($string);
$length = strlen($str);
//  echo $length;
$vowel = ['a', 'e' ,'i', 'o','u'];
$vowelcount = 0;
$consonantcount = 0;

for($i=0; $i<$length; $i++){
    $chars = $str[$i];

  if($chars >= 'a' && $chars<= 'z'){
        if (in_array($chars, $vowel)) {
            $vowelcount ++;
        } else{
            $consonantcount++;
        }
  }
}
 echo "Total Vowel Counts " .$vowelcount;
echo "<br>";
 echo "Total consonant count " .$consonantcount;

?>