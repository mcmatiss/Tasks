<?php
//Create a 2D associative array in 2nd dimension with fruits and their weight.
//Create a function that determines if fruit has weight over 10kg.
//Create a secondary array with shipping costs per weight. Meaning that you can say that over 10 kg
//shipping costs are 2 euros, otherwise its 1 euro.
//Using foreach loop print out the values of the fruits and how much it would cost to ship this product.
$fruitArray = [
    [
        "name" => "Apples",
        "weight" => 500
    ],
    [
        "name" => "Strawberries",
        "weight" => 1000
    ],
    [
        "name" => "Watermelons",
        "weight" => 11000
    ]
];

function isOver10KG(array $fruit): bool
{
    if ($fruit["weight"] > 10000) {
        return true;
    } else {
        return false;
    }
}

$shippingCosts = [
    "under10kgCostInEuros" => 1,
    "over10kgCostInEuros" => 2
];

foreach ($fruitArray as $fruits) {
    foreach ($fruits as $property => $value) {
        echo "$property: $value" . PHP_EOL;
    }
    if (isOver10KG($fruits)) {
        echo "Shipping cost is €" . $shippingCosts["over10kgCostInEuros"] . PHP_EOL;
    } else {
        echo "Shipping cost is €" . $shippingCosts["under10kgCostInEuros"] . PHP_EOL;
    }
    echo PHP_EOL;
}