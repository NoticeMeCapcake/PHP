<?php
require_once "Fruit.php";

class Pear extends Fruit
{
    public function __construct() {
        $this->grow();
        $this->name = "Pear";
    }

    public function grow() {
        $this->weight = rand(130, 170);
    }
}