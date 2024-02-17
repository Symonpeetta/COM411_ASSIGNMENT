<?php

// Function to validate if the given year is a leap year
function isLeapYear($year) {
    return (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0));
}

// Function to validate if the given date is valid
function isValidDate($year, $month, $day) {
    // Check if the month is valid
    if ($month < 1 || $month > 12) {
        return false;
    }

    // Check if the day is valid for the given month
    $daysInMonth = [
        1 => 31, 2 => (isLeapYear($year) ? 29 : 28), 3 => 31, 4 => 30, 5 => 31, 6 => 30,
        7 => 31, 8 => 31, 9 => 30, 10 => 31, 11 => 30, 12 => 31
    ];
    return ($day >= 1 && $day <= $daysInMonth[$month]);
}

// Function to get the day of the week
function getDayOfWeek($year, $month, $day) {
    $timestamp = mktime(0, 0, 0, $month, $day, $year);
    return date("l", $timestamp);
}

// Input date from the user
echo "Enter a date (YYYY-MM-DD): ";
$inputDate = trim(fgets(STDIN));

// Parse the input date
list($year, $month, $day) = explode('-', $inputDate);

// Validate the date
if (!checkdate($month, $day, $year)) {
    echo "Invalid date. Please enter a valid date in the format YYYY-MM-DD.\n";
    exit;
}

// Convert to integers
$year = intval($year);
$month = intval($month);
$day = intval($day);

// Check if the date is valid
if (!isValidDate($year, $month, $day)) {
    echo "Invalid date. Please enter a valid date.\n";
    exit;
}

// Get the day of the week
$dayOfWeek = getDayOfWeek($year, $month, $day);

// Display the result
echo "The day of the week for $inputDate is: $dayOfWeek\n";

?>