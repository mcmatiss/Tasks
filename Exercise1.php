<?php
//Create a function that accepts any string and returns the same value with added "codelex" by the end of it.
//Print this value out.
function returnStringWithCodelex($originalString): string {
    return $originalString . 'codelex';
}
$userTextInput = readline("Enter text: ");
echo returnStringWithCodelex($userTextInput);