<?php

class FruitContainer
{
    public int $fruitAmount;
    public int $weight;
    public function __construct() {
        $this->fruitAmount = 0;
        $this->weight = 0;
    }
}