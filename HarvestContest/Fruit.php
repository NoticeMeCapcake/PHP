<?php

abstract Class Fruit
{
    protected int $weight;
    protected string $name;
    public abstract function grow(); // sets a  random weight to a fruit
    public function getWeight(): int {
        return $this->weight;
    } // returns the weight of a fruit
    public function getName(): string {
        return $this->name;
    }
}