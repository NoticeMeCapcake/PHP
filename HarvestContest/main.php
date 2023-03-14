<?php
require_once 'Garden.php';
require_once 'AppleTree.php';
require_once 'PearTree.php';

srand(time());

$appleTreeAmount = 10;
$pearTreeAmount = 15;

$garden = new Garden();
$harvester = new Harvester();

for ($i = 0; $i < $appleTreeAmount; $i++) {
    $garden->plantTree(new AppleTree());
}
for ($i = 0; $i < $pearTreeAmount; $i++) {
    $garden->plantTree(new PearTree());
}

$garden->growAllFruits();

$harvester->harvest($garden);

$gardenHarvest = $harvester->popNSortFruits();

echo "Яблоки[кол-во: " . $gardenHarvest["Apple"]->fruitAmount . ", вес: " .
    $gardenHarvest["Apple"]->weight . " грамм]" . PHP_EOL;
echo "Груши[кол-во: " . $gardenHarvest["Pear"]->fruitAmount .
    ", вес: " . $gardenHarvest["Pear"]->weight." грамм]" . PHP_EOL;