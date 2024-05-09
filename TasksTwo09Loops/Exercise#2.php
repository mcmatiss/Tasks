<?php

echo "Input number of terms: ";

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function
$i = (float) readline("Enter i: ");
$n = (float) readline("Enter n: ");
for ($j = 0; $j < $n; $j++){
    $i *= $i;
}
echo $i . PHP_EOL;