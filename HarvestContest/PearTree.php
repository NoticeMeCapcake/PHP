<?php
require_once "Tree.php";
require_once "Pear.php";
class PearTree extends Tree
{
    public function growFruits()
    {
        $this->fruits = [];
        for ($i = 0; $i < rand(0, 20); $i++) {
            $this->fruits[] = new Pear();
        }
    }

}