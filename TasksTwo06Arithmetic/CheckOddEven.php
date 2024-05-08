<?php
//Exercise #2
//Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is
//odd, or “Even Number” otherwise. The program shall always print “bye!” before exiting.
$number = (int) readline("Enter an integer number: ");
if ($number % 2 !== 0) {
    echo "Odd Number" . PHP_EOL;
} else {
    echo "Even Number" . PHP_EOL;
}
exit("bye!");