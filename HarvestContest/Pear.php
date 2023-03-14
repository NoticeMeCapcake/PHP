<?php

class Pear implements Fruit
{
    public int $weight;
    public function getName(): string
    {
        return 'Pear';
    }
    public function grow() {
        $this->weight += rand(130, 170);
    }
    public function getWeight(): int
    {
        return $this->weight;
    }
}