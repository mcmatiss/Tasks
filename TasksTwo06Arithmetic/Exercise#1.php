<?php
//Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.
$userIntegerInputA = (int) readline("Enter the first integer: ");
$userIntegerInputB = (int) readline("Enter the second integer: ");
$intSum = $userIntegerInputA + $userIntegerInputB;
$intDifference = $userIntegerInputA - $userIntegerInputB;
$isSumDiff15 = false;

if (
    $userIntegerInputA === 15 ||
    $userIntegerInputB === 15 ||
    $intSum === 15 ||
    $intDifference === 15
) {
    $isSumDiff15 = true;
}
var_dump($isSumDiff15);