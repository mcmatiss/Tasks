<?php

$numbers = [20, 30, 25, 35, -16, 60, -100];

//todo calculate an average value of the numbers
$average = 0;
foreach ($numbers as $number) {
    $average += $number;
}
echo $average /= count($numbers);