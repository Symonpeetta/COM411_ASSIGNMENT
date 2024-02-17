<?php

function twoSum($nums, $target) {
    $indices = array(); 
    
    // Iterate through the array
    foreach ($nums as $key => $num) {
        $complement = $target - $num; 
        
        // Check if the complement exists in the hashmap
        if (array_key_exists($complement, $indices)) {
            // If found, return the indices of the two numbers
            return [$indices[$complement], $key];
        }
        
       
        $indices[$num] = $key;
    }
    
    return [];
}

$nums = [2, 7, 11, 15];
$target = 4;
$result = twoSum($nums, $target);
if (!empty($result)) {
    echo "Indices of two numbers that add up to $target are: [$result[0], $result[1]]";
} else {
    echo "No such pair found.";
}

?>

 