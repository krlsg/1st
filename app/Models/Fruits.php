<?php

namespace  PHPBootcamp\Models;

class Fruits
{
    public function __construct()
    {
        $this->arrayOfFruits = [
            'apple',
            'orange',
            'banana',
            'melon',
            'watermelon',
            'cherry',
            'strawberry',
            'one I dont like',
        ];
    }

    public function getRandomFruits() : array
    {
        $this->shuffle();
        return $this->arrayOfFruits;
    }
    private function shuffle()
    {
        shuffle($this->arrayOfFruits);
    }
}