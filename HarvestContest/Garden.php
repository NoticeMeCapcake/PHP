<?php

class Garden
{
    public int $appleTreeAmount;
    public int $pearTreeAmount;
    public array $trees;
    public Harvester $harvester;
    public function __construct() {
        $this->appleTreeAmount = 10;
        $this->pearTreeAmount = 15;
        $this->harvester = new Harvester();
        $this->trees = array();
        $this->plantAllTrees();
    }
    public function plantAllTrees(): void {
        for ($i = 0; $i < $this->appleTreeAmount; $i++) {
            $this->trees += array(new AppleTree());
        }
        for ($i = 0; $i < $this->pearTreeAmount; $i++) {
            $this->trees += array(new PearTree());
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