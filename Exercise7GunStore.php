<?php
//Imagine you own a gun store. Only certain guns can be purchased with license types.
//Create an object (person) that will be the requester to purchase a gun (object) Person object has
//a name, valid licenses (multiple) & cash. Guns are objects stored within an array.
//Each gun has license letter, price & name. Using PHP in-built functions determine if
//the requester (person) can buy a gun from the store.
$person = new stdClass();
$person -> name = "Liene Bērziņa";
$person -> cash = 990000;
$person -> licenses = ['P', 'S'];

function createWeapon(string $name, int $cost, string $license): stdClass
{
    $gun = new stdClass();
    $gun->name = $name;
    $gun->cost = $cost;
    $gun->license = $license;
    return $gun;
}

$guns = [
    createWeapon("357 MAGNUM Revolver", 81900, "P"),
    createWeapon("7MM-08 REM bolt-action Rifle", 99100, "R"),
    createWeapon(".410 BORE pump-action Shotgun", 42900, "S")
];

$availableGuns = [];

foreach ($guns as $gun){
    if (in_array($gun->license, $person->licenses) && $person->cash >= $gun->cost){
        $availableGuns[] = $gun;
    }
}


if (count($availableGuns) > 0) {
    echo $person->name . ' can purchase: ' . PHP_EOL;
    foreach ($availableGuns as $availableGun) {
        echo " * $availableGun->name for $" . number_format($availableGun->cost / 100, 2) . PHP_EOL;
    }
} else {
    echo $person->name . ' does not have enough funds for purchase.';
}