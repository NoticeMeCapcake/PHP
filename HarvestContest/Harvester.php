<?php

class Harvester
{
    public array $harvestedFruits;
    public function __construct() {
        $this->harvestedFruits = array();
    }

    public function harvest(Tree $tree): void {
        $this->harvestedFruits = array_merge($this->harvestedFruits ,$tree->harvest());
    }
    public function countFruits(): array {
        $result = array(
            "Apple" => new FruitContainer(),
            "Pear" => new FruitContainer()
        );

        foreach ($this->harvestedFruits as $fruit) {
            if ($fruit instanceof Fruit) {
                $fruitName = $fruit->getName();
                $result[$fruitName]->fruitAmount += 1;
                $result[$fruitName]->weight += $fruit->getWeight();
            }
        }
        return $result;
    }
}