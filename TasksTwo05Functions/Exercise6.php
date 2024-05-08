<?php
//Create a non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
//Create a for loop that iterates non-associative array using php in-built function that
//determines count of elements in the array.
//Create a function that doubles the integer number. Within the loop using
//php in-built function print out the double of the number value (using your custom function).
$anArray = [4, 32, 100, 3.2, 'text'];
for ($i = 0; $i < sizeof($anArray); $i++) {
    echo ' ' . doubleInteger($anArray[$i]);
}
function doubleInteger($intNumber)
{
    if (is_integer($intNumber)){
        $intNumber *= 2;
    }
    return $intNumber;
}