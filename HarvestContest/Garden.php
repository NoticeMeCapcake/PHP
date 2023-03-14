<?php
require_once "Harvester.php";
require_once "FruitContainer.php";
class Garden
{

    public array $trees;
    public function __construct() {
        $this->trees = array();
    }
    public function plantTree(Tree $tree): void {
        $this->trees[] = $tree;
    }
    public function growAllFruits(): void {
        foreach ($this->trees as $tree) {
            $tree->growFruits();
        }
    }
}