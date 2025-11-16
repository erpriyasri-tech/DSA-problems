<?php
// Check if a string is a palindrome
//Example: madam → true, hello → false.

$str = 'madam';
$length = strlen($str);
$isPalindrome = true ;

for($i=0; $i<$length/2; $i++){
    if($str[$i] != $length - $i -1){
        $isPalindrome = false;
        break; 
    }
}

if ($isPalindrome) {
    echo "$str is a palindrome";
} else {
    echo "$str is not a palindrome";
}
?>