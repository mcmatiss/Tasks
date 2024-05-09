<?php
//Write a program that calculates and displays a person's body mass index (BMI).
//A person's BMI is calculated with the following formula:
//BMI = weight x 703 / height ^ 2. Where weight is measured in pounds and height is measured in inches.

//*Display a message indicating whether the person has optimal weight, is underweight, or is overweight.
//*A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25.
//*If the BMI is less than 18.5, the person is considered underweight.
//*If the BMI value is greater than 25, the person is considered overweight.
//
//Your program must accept metric units.
//BMI = weight / height ^ 2. Where weight is measured in kilograms and height is measured in meters.
$weight = (float) readline("Enter your weight in kilograms: ");
$height = (float) readline("Enter your height in meters: ");
$BMI = $weight / pow($height, 2);
if ($BMI >= 18.5 && $BMI <= 25) {
    echo "Your BMI(" . number_format($BMI, 1) . ") is optimal." . PHP_EOL;
} elseif ($BMI < 18.5) {
    echo "Your BMI(" . number_format($BMI, 1) . ") is less than 18.5, it falls within the underweight range." . PHP_EOL;
} else {
    echo "Your BMI (" . number_format($BMI, 1) . ") is more than 25, it falls within the overweight range." . PHP_EOL;
}