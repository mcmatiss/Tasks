<?php
$numbers = [];
$numbers[] = (float) readline("Input the 1st number: ");
$numbers[] = (float) readline("Input the 2nd number: ");
$numbers[] = (float) readline("Input the 3rd number: ");
$highestNumber = 0;

//todo print the largest number
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] > $highestNumber) {
        $highestNumber = $numbers[$i];
    }
}
echo "The largest number is: $highestNumber\n";