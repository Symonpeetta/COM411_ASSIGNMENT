<?php

function calculateGrade($cgpa) {
    // Validate CGPA input
    if (!is_numeric($cgpa) || $cgpa < 0 || $cgpa > 4.0) {
        return "Invalid CGPA";
    }
    
    // Determine grade based on CGPA
    if ($cgpa >= 4.0) {
        return "CGPA: $cgpa - Excellent (A)";
    } elseif ($cgpa >= 3.5) {
        return "CGPA: $cgpa - Very Good (B+)";
    } elseif ($cgpa >= 3.0) {
        return "CGPA: $cgpa - Good (B)";
    } elseif ($cgpa >= 2.5) {
        return "CGPA: $cgpa - Fair (C+)";
    } elseif ($cgpa >= 2.0) {
        return "CGPA: $cgpa - Pass (C)";
    } else {
        return "CGPA: $cgpa - Fail (F)";
    }
}

// Get CGPA from user input
echo "Enter your CGPA: ";
$cgpa = readline();

// Call the function with user input
echo calculateGrade($cgpa);


?>