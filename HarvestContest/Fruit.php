<?php

interface Fruit
{
    public function grow(); // sets a  random weight to a fruit
    public function getWeight(); // returns the weight of a fruit
    public function getName();
}