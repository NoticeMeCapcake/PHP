<?php

class Harvester
{
    private array $harvestedFruits;
    public function __construct() {
        $this->harvestedFruits = array();
    }
    public function harvest(Garden $garden): void {
        foreach ($garden->trees as $tree) {
            $this->harvestedFruits = array_merge($this->harvestedFruits ,$tree->harvest());
        }
    }
    public function popNSortFruits(): array {
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
        $this->harvestedFruits = [];
        return $result;
    }

}