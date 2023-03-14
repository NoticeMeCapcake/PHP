<?php
require_once 'Garden.php';
require_once 'AppleTree.php';
require_once 'PearTree.php';


$appleTreeAmount = 10;
$pearTreeAmount = 15;
$garden = new Garden();
for ($i = 0; $i < $appleTreeAmount; $i++) {
    $garden->plantTree(new AppleTree());
}
for ($i = 0; $i < $pearTreeAmount; $i++) {
    $garden->plantTree(new PearTree());
}
echo sizeof($garden->trees).PHP_EOL;
$garden->growAllFruits();
$garden->harvest();
$gardenHarvest = $garden->summarizeHarvest();
echo "Apples[amount: ".$gardenHarvest["Apple"]->fruitAmount.", weight: ".$gardenHarvest["Apple"]->weight."gm]".PHP_EOL;
echo "Pears[amount: ".$gardenHarvest["Pear"]->fruitAmount.", weight: ".$gardenHarvest["Pear"]->weight."gm]".PHP_EOL;