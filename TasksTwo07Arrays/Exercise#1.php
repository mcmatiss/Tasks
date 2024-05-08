<?php
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//todo
echo "Original numeric array: ";
for ($i = 0; $i < count($numbers); $i++) {
    if ($i === 0) {
        echo "[$numbers[$i], ";
    } elseif ($i === count($numbers)-1) {
        echo "$numbers[$i]]";
    } else {
        echo "$numbers[$i], ";
    }
}
echo PHP_EOL;

//todo
echo "Sorted numeric array: ";
$sortedNumbers = $numbers;
sort($sortedNumbers);

for ($i = 0; $i < count($sortedNumbers); $i++) {
    if ($i === 0) {
        echo "[$sortedNumbers[$i], ";
    } elseif ($i === count($sortedNumbers)-1) {
        echo "$sortedNumbers[$i]]";
    } else {
        echo "$sortedNumbers[$i], ";
    }
}
echo PHP_EOL;

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

//todo
echo "Original string array: ";
for ($i = 0; $i < count($words); $i++) {
    if ($i === 0) {
        echo "[$words[$i], ";
    } elseif ($i === count($words)-1) {
        echo "$words[$i]]";
    } else {
        echo "$words[$i], ";
    }
}
echo PHP_EOL;

//todo
echo "Sorted string array: ";
$sortedWords = $words;
sort($sortedWords);

for ($i = 0; $i < count($sortedWords); $i++) {
    if ($i === 0) {
        echo "[$sortedWords[$i], ";
    } elseif ($i === count($sortedWords)-1) {
        echo "$sortedWords[$i]]";
    } else {
        echo "$sortedWords[$i], ";
    }
}