<?php
//Write a program that reads a positive integer and count the number of digits the number has.
$number = (int) readline("Enter a positive integer: ");
if ($number <= 0) {
    do {
        echo "Error! The entered value has to be a positive integer.\n";
        $number = (int) readline("Enter a positive integer: ");
    } while ($number <= 0);
}
if (strlen((string)$number) === 1){
    echo "The number $number has " . strlen((string)$number) . " digit.\n";
} else {
    echo "The number $number has " . strlen((string)$number) . " digits.\n";
}