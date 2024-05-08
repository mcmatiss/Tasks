<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$userInput = (int) readline("Enter the value to search for: ");
$valueMatches = false;
//todo check if an array contains a value user entered
foreach ($numbers as $number) {
    if ($number === $userInput) {
        $valueMatches = true;
    }
}
if ($valueMatches) {
    echo "Array contains the value ($userInput)";
} else {
    echo "Array does not contain the value ($userInput)";
}