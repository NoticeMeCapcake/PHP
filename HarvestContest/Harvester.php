<?php

class Harvester
{
    public array $harvestedFruits;
    public function harvest(Tree $tree): void {
        $this->harvestedFruits += $tree->harvest();
    }
    public function countFruits(): array {
        $result = array(
            "Apple" => 0,
            "Pear" => 0
        );

        foreach ($this->harvestedFruits as $fruit) {
            if ($fruit instanceof Fruit) {
                 $result[$fruit->getName()] += 1;
            }
        }
        return $result;
    }
}