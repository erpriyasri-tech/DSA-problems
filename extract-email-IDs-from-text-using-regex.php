<?php
$text = "Contact us at support@example.com or sales123@gmail.com for details.";

preg_match_all('/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/', $text, $matches);

print_r($matches[0]);
?>