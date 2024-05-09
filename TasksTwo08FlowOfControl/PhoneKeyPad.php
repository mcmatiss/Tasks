<?php
$userString = readline("Enter a string of text: ");
$userString = strtoupper($userString);
$userStringInLetters = [];
$converted = '';

for ($i = 0; $i < strlen($userString); $i++){
    $userStringInLetters[] = $userString[$i];
}

if (count($userStringInLetters) > 0){
    for ($i = 0; $i < count($userStringInLetters); $i++){
        if (
            $userStringInLetters[$i] == 'A' ||
            $userStringInLetters[$i] == 'B' ||
            $userStringInLetters[$i] == 'C'
        ){
            $converted = $converted . '2';
        }
        if (
            $userStringInLetters[$i] == 'D' ||
            $userStringInLetters[$i] == 'E' ||
            $userStringInLetters[$i] == 'F'
        ){
            $converted = $converted . '3';
        }
        if (
            $userStringInLetters[$i] == 'G' ||
            $userStringInLetters[$i] == 'H' ||
            $userStringInLetters[$i] == 'I'
        ){
            $converted = $converted . '4';
        }
        if (
            $userStringInLetters[$i] == 'J' ||
            $userStringInLetters[$i] == 'K' ||
            $userStringInLetters[$i] == 'L'
        ){
            $converted = $converted . '5';
        }
        if (
            $userStringInLetters[$i] == 'M' ||
            $userStringInLetters[$i] == 'N' ||
            $userStringInLetters[$i] == 'O'
        ){
            $converted = $converted . '6';
        }
        if (
            $userStringInLetters[$i] == 'P' ||
            $userStringInLetters[$i] == 'Q' ||
            $userStringInLetters[$i] == 'R' ||
            $userStringInLetters[$i] == 'S'
        ){
            $converted = $converted . '7';
        }
        if (
            $userStringInLetters[$i] == 'T' ||
            $userStringInLetters[$i] == 'U' ||
            $userStringInLetters[$i] == 'V'
        ){
            $converted = $converted . '8';
        }
        if (
            $userStringInLetters[$i] == 'W' ||
            $userStringInLetters[$i] == 'X' ||
            $userStringInLetters[$i] == 'Y' ||
            $userStringInLetters[$i] == 'Z'
        ){
            $converted = $converted . '9';
        }
    }
}
echo $converted . PHP_EOL;

$converted = '';
for ($i = 0; $i < count($userStringInLetters); $i++){
    $letter = $userStringInLetters[$i];
    switch ($letter) {
        case "A":
        case "B":
        case "C":
            $converted = $converted . '2';
            break;
        case "D":
        case "E":
        case "F":
            $converted = $converted . '3';
            break;
        case "G":
        case "H":
        case "I":
            $converted = $converted . '4';
            break;
        case "J":
        case "K":
        case "L":
            $converted = $converted . '5';
            break;
        case "M":
        case "N":
        case "O":
            $converted = $converted . '6';
            break;
        case "P":
        case "Q":
        case "R":
        case "S":
            $converted = $converted . '7';
            break;
        case "T":
        case "U":
        case "V":
            $converted = $converted . '8';
            break;
        case "W":
        case "X":
        case "Y":
        case "Z":
            $converted = $converted . '9';
            break;
    }
}
echo $converted . PHP_EOL;