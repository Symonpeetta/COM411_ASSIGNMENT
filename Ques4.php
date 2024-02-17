<?php

function isPalindrome($s) {
    $s = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $s));
    

    $length = strlen($s);
    
   
    for ($i = 0; $i < $length / 2; $i++) {
        // Compare characters 
        if ($s[$i] !== $s[$length - $i - 1]) {
            // If characters don't match, return false
            return false;
        }
    }
    
    // If all characters match, return true
    return true;
}


echo "Enter a string: ";
$inputString = trim(fgets(STDIN));

echo "Is '$inputString' a palindrome? " . (isPalindrome($inputString) ? "Yes" : "No") . "\n";


?>