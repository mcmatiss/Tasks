<?php
//Create a person object with name, surname and age. Create a function that will determine if the person
//has reached 18 years of age. Print out if the person has reached age of 18 or not.
$personOneObject = new stdClass();
$personOneObject -> name = "Ritvars";
$personOneObject -> surname = "Bērziņš";
$personOneObject -> age = 9;

function hasReachedAgeOf18(stdClass $personObject): bool
{
    if ($personObject->age < 18) {
        return false;
    }
    return true;
}
echo hasReachedAgeOf18($personOneObject) ?
    "$personOneObject->name has reached age of 18." . PHP_EOL
    : "$personOneObject->name has not reached age of 18." . PHP_EOL;

//Create an array of objects that uses the function of exercise 3 but in loop printing out
//if the person has reached age of 18.
$personTwoObject = new stdClass();
$personTwoObject -> name = "Daniels";
$personTwoObject -> surname = "Liepiņš";
$personTwoObject -> age = 21;
$personThreeObject = new stdClass();
$personThreeObject -> name = "Zane";
$personThreeObject -> surname = "Kalniņa";
$personThreeObject -> age = 18;

$personObjectArray = [$personOneObject, $personTwoObject, $personThreeObject];

foreach ($personObjectArray as $person) {
    echo hasReachedAgeOf18($person) ?
        "$person->name has reached age of 18." . PHP_EOL
        : "$person->name has not reached age of 18." . PHP_EOL;
}