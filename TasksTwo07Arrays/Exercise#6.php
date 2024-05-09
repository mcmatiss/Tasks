<?php
//Write a program to play a word-guessing game like Hangman.
//
//It must randomly choose a word from a list of words.
//It must stop when all the letters are guessed.
//It must give them limited tries and stop after they run out.
//It must display letters they have already guessed (either only the incorrect guesses or all guesses).
$tries = 4;
do {
$words = [
    'fish',
    'cat',
    'dog'
];

$chosenWord = $words[rand(0, count($words)-1)];
$tries = 4;
$misses = "";
$wordLetters = [];

for ($i = 0; $i < strlen($chosenWord); $i++) {
    $wordLetters[] = $chosenWord[$i];
}

$hiddenWord = $wordLetters;
for ($i = 0; $i < count($hiddenWord); $i++) {
    $hiddenWord[$i] = '_ ';
}


do {
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-\n";
    echo "Word:	";
    foreach ($hiddenWord as $hiddenLetter) {
        echo $hiddenLetter;
    }
    echo "\nMisses: $misses\n";
    if ($hiddenWord === $wordLetters) {
        echo "\nYOU GOT IT!\n\n";
        break;
    }
    $guess = readline("Guess: \n");
    $hasGuessed = false;
    foreach ($wordLetters as $key=>$letter) {
        if ($guess === $letter) {
            $hiddenWord[$key] = $letter;
            $hasGuessed = true;
        }
    }
    if ( ! $hasGuessed) {
        $misses = $misses . $guess;
        $tries--;
    }
} while ($tries >= 0);
$yesOrNo = 1;
do {
    $gameState = readline('Play "again" or "quit"? ');
    if ($gameState === 'again') {
        $yesOrNo--;
    } elseif ($gameState === 'quit') {
        exit;
    }
} while ($yesOrNo > 0);
} while ($tries >= -1);