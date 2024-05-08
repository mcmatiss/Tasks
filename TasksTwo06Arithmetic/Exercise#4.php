<?php
//Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.
//Take note that it is the same as factorial of N.
$lowerBoundInt = 1;
$upperBoundInt = 10;
$product = $lowerBoundInt;

for ($i = $lowerBoundInt; $i <= $upperBoundInt; $i++) {
    $product *= $i;
}
echo "The product of integers from $lowerBoundInt to $upperBoundInt is $product" . PHP_EOL;