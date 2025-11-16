<?php
//Check if a string is a palindrome.
//Example: "madam" → true, "hello" → false

function isPalindrome($string) {
$length = strlen($string);
$left = 0;
$right = $length - 1;

while($left < $right){
 if($string[$left] !== $string[$right]){
    return false;
 }
 $left++;
 $right--;
}
return true;
}

echo isPalindrome("madam") ? "true" : "false"; 
echo "</br>";
echo isPalindrome("hello") ? "true" : "false";  
?>