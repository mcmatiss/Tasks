<?php
//Create a function that accepts 2 integer arguments. First argument is a base value and the second one
//is a value that it has been multiplied by. For example, given argument 10 and 5 prints out 50
function multiplication ($argumentOne, $argumentTwo): int {
    return $argumentOne * $argumentTwo;
}
$userIntegerInputA = (int) readline("Enter the first integer: ");
$userIntegerInputB = (int) readline("Enter the second integer: ");
echo multiplication($userIntegerInputA, $userIntegerInputB);