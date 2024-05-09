<?php
//Code an interactive, two-player game of Tic-Tac-Toe. You'll use a two-dimensional array of chars.
//
//(...a game already in progress)
//
//	X   O
//	O X X
//	  X O
//
//'O', choose your location (row, column): 0 1
//
//	X O O
//	O X X
//	  X O
//
//'X', choose your location (row, column): 2 0
//
//	X O O
//	O X X
//	X X O
//
//The game is a tie.
function display_board()
{
    global $gameBoard;
    echo "\n";
    for ($i = 0; $i < count($gameBoard); $i++){
        if ($i % 3 === 0 && $i !== 0) {
            echo "\n";
        }
        echo $gameBoard[$i] -> value;
    }
    echo "\n\n";
}

function switchPlayer(): string
{
    global $totalMoves, $currentPlayer;
    $totalMoves--;
    if ($currentPlayer == 'X') {
        return $currentPlayer = 'O';
    } else {
        return $currentPlayer = 'X';
    }
}

function makeMove(): string
{
    global $currentPlayer, $possibleMoves;
    $move = readline("$currentPlayer, choose your location (row, column):");
    do {
        if ( ! in_array($move, $possibleMoves)) {
            echo "Invalid input try again.\n";
            $move = readline("$currentPlayer, choose your location (row, column):");
        }
    } while ( ! in_array($move, $possibleMoves));
    return $move;
}

function changeField(string $move)
{
    global $possibleMoves, $currentPlayer, $gameBoard, $totalMoves;
    $chosenField =  array_search($move, $possibleMoves);
    if ($gameBoard[$chosenField] -> isEmpty) {
        $gameBoard[$chosenField] -> isEmpty = false;
        return $gameBoard[$chosenField] -> value = $currentPlayer;
    } else {
        switchPlayer();
        echo "\nThis space has already been taken.\n";
        return $totalMoves += 2;
    }
}

function checkWinner()
{
    global $winConditions, $gameBoard, $possibleMoves, $currentPlayer;
    for ($i = 0; $i < count($winConditions); $i++) {
        $score = 0;
        for ($j = 0; $j < count($winConditions[$i]); $j++) {
            if ($gameBoard[array_search($winConditions[$i][$j], $possibleMoves)] -> value === $currentPlayer) {
                $score++;
            }
        }
        if ($score === 3) {
            display_board();
            exit ("$currentPlayer wins!\n");
        }
    }
}


$totalMoves = 9;
$currentPlayer = 'X';
$winConditions = [
    [
        '1 1', '1 2', '1 3'
    ],
    [
        '2 1', '2 2', '2 3'
    ],
    [
        '3 1', '3 2', '3 3'
    ],
    [
        '1 1',
        '2 1',
        '3 1'
    ],
    [
        '1 2',
        '2 2',
        '3 2'
    ],
    [
        '1 3',
        '2 3',
        '3 3'
    ],
    [
        '1 1', '2 2', '3 3'
    ],
    [
        '1 3', '2 2', '3 1'
    ]
];
$possibleMoves = [
    '1 1', '1 2', '1 3',
    '2 1', '2 2', '2 3',
    '3 1', '3 2', '3 3',
    ];
$gameBoard = [];

//Template for each field on game board
function createNewBoard(int $row, int $column): stdClass
{
    $field = new stdClass();
    $field -> row = $row;
    $field -> column = $column;
    $field -> value = '-';
    $field -> isEmpty = true;
    return $field;
}

//Generates new game board
for ($i = 1; $i <= 3; $i++){
    for ($j = 1; $j <= 3; $j++){
        $gameBoard[] = createNewBoard($i, $j);
    }
}

do {
    display_board();
    changeField(makeMove());
    if ($totalMoves <= 5) {
        checkWinner();
    }
    switchPlayer();
} while ($totalMoves !== 0);

display_board();
echo "The game is a tie.\n";