<?php
function isPalindrome($num) {
    // Negative numbers are not palindromes
    if ($num < 0) {
        return false;
    }

    $original = $num;
    $reverse = 0;

    while ($num > 0) {
        $digit = $num % 10;
        $reverse = $reverse * 10 + $digit;
        $num = intdiv($num, 10);
    }

    return $original === $reverse;
}

echo isPalindrome(121) ? "true" : "false";
echo "<br>";
echo isPalindrome(10) ? "true" : "false";

?>