<?php

class Apple implements Fruit
{
    public int $weight;
    public function getName(): string
    {
        return 'Apple';
    }
    public function grow() {
        $this->weight += rand(150, 180);
    }
    public function getWeight(): int
    {
        return $this->weight;
    }
}