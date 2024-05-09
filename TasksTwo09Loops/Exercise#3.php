<?php
//Write a program that asks the user to enter two words.
// The program then prints out both words on one line.
// The words will be separated by enough dots so that the total line length is 30.
//This could be used as part of an index for a book. To print out the dots, use echo "." inside a loop body.
$firstWord = readline("Enter first word: ");
$secondWord = readline("Enter second word: ");
$dotLength = 30 - (strlen($firstWord) +strlen($secondWord));
echo $firstWord;
for ($i = 0; $i < $dotLength; $i++) {
    echo ".";
}
echo $secondWord . PHP_EOL;