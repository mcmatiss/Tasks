<?php
//Design a Geometry class with the following methods...
//
//The methods should display an error message if negative values are used for the circle’s radius,
//the rectangle’s length or width, or the triangle’s base or height.
//
//Next write a program to test the class, which displays the following menu and responds to the user’s selection...
//
//Display an error message if the user enters a number outside the range of 1 through 4 when selecting an item from the menu.
class Geometry {
    static function get_circleArea(float $r): string
    {
        if ($r < 0) {
            return "Error! Cannot use negative values for the circle’s radius.\n";
        } else {
            return "Area of a Circle = " . pi() * $r * 2 . PHP_EOL;
        }
    }
    static function get_rectangleArea(float $length, float $width): string
    {
        if ($length < 0 || $width < 0) {
            return "Error! Cannot use negative values for the triangle’s base or height.\n";
        } else {
            return "Area of a Rectangle = " . $length * $width . PHP_EOL;
        }
    }
    static function get_triangleArea(float $base, float $height): string
    {
        if ($base < 0 || $height < 0) {
            return "Error! Cannot use negative values for the rectangle’s length or width.\n";
        } else {
            return "Area of a Triangle = " . $base * $height * 0.5 . PHP_EOL;
        }
    }
}

echo "Geometry Calculator\n";
echo PHP_EOL;
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";
$userChoice = (int) readline("Enter your choice (1-4) : ");

if ($userChoice < 1 || $userChoice > 4) {
    echo "Error! Entered value is outside the number range of 1 through 4.\n";
} elseif ($userChoice === 1) {
    $Circle = new Geometry();
    echo "Calculate the Area of a Circle\n";
    $radius = (float) readline("Enter the circle's radius: ");
    echo $Circle -> get_circleArea($radius);
} elseif ($userChoice === 2) {
    $Rectangle = new Geometry();
    echo "Calculate the Area of a Rectangle\n";
    $length = (float) readline("Enter the rectangle's length: ");
    $width = (float) readline("Enter the rectangle's width: ");
    echo $Rectangle -> get_rectangleArea($length, $width);
} elseif ($userChoice === 3) {
    $Triangle = new Geometry();
    echo "Calculate the Area of a Triangle\n";
    $base = (float) readline("Enter the triangle's base: ");
    $height = (float) readline("Enter the triangle's height: ");
    echo $Triangle -> get_triangleArea($base, $height);
} else {
    exit;
}