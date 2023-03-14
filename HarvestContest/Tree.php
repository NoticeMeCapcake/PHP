<?php

interface Tree
{
    public function growFruits(); // grows a random number of fruits
    public function harvest(): array; // returns an array of fruits
}