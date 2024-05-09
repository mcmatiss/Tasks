<?php
//Write a program which prints “Sunday”, “Monday”, ... “Saturday” if the int variable "dayNumber" is
// 0, 1, ..., 6, respectively. Otherwise, it shall print "Not a valid day".
//
//Use:
//
//a "nested-if" statement
//a "switch-case-default" statement.
$dayNumber = (int) readline("Enter a day number (0-6): \n");

if ($dayNumber > 6 || $dayNumber < 0) {
        echo "Not a valid day\n";
} else {
    if ($dayNumber === 0) {
        echo "Sunday\n";
    }
    if ($dayNumber === 1) {
        echo "Monday\n";
    }
    if ($dayNumber === 2) {
        echo "Tuesday\n";
    }
    if ($dayNumber === 3) {
        echo "Wednesday\n";
    }
    if ($dayNumber === 4) {
        echo "Thursday\n";
    }
    if ($dayNumber === 5) {
        echo "Friday\n";
    }
    if ($dayNumber === 6) {
        echo "Saturday\n";
    }
}

$days = "$dayNumber";
switch ($days) {
    case 0:
        echo "Sunday\n";
        break;
    case 1:
        echo "Monday\n";
        break;
    case 2:
        echo "Tuesday\n";
        break;
    case 3:
        echo "Wednesday\n";
        break;
    case 4:
        echo "Thursday\n";
        break;
    case 5:
        echo "Friday\n";
        break;
    case 6:
        echo "Saturday\n";
        break;
    default:
        echo "Not a valid day\n";
}