<?php

$number = (float) readline("Enter the number: ");

//todo print if number is positive or negative
if ($number < 0){
    echo "The number $number is negative.\n";
} else if ($number > 0){
    echo "The number $number is positive.\n";
} else {
    echo "The number zero is neither positive nor negative.\n";
}