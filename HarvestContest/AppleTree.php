<?php

class AppleTree implements Tree
{
    public array $fruits;
    public function growFruits()
    {
        $this->fruits = [];
        for ($i = 0; $i < rand(40, 50); $i++) {
            $this->fruits[] = new Apple();
        }
    }
}