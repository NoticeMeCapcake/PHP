<?php
require_once "Harvester.php";
require_once "FruitContainer.php";
class Garden
{

    public array $trees;
    public Harvester $harvester;
    public function __construct() {
        $this->harvester = new Harvester();
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
    public function harvest(): void {
        foreach ($this->trees as $tree) {
            $this->harvester->harvest($tree);
        }
    }
    public function summarizeHarvest(): array {
        return $this->harvester->countFruits();
    }
}