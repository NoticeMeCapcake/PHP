<?php

abstract Class Tree
{
    public array $fruits;
    protected int $id;
    public function __construct()
    {
        $this->fruits = [];
        $this->id = spl_object_id($this);
    }

    public abstract function growFruits(); // grows a random number of fruits
    public function harvest(): array {
        $harvest = $this->fruits;
        $this->fruits = [];
        return $harvest;
    } // returns an array of fruits
    public function getId(): int {
        return $this->id;
    }
}