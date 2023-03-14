<?php
require_once "Fruit.php";

class Apple extends Fruit
{
    public function __construct() {
        $this->grow();
        $this->name = "Apple";
    }

    public function grow() {
        $this->weight = rand(150, 180);
    }
}