<?php
namespace  PHPBootcamp\Models;

class Animals implements animalModelInterface
{
    /**
     * Returns a list of animals
     *
     * @return array
     */
    public function getListOfAnimals() : array
    {
        return [
            'rabbit',
            'bear',
            'rat',
            'mouse',
            'cat',
            'dog',
            'moose',
            'elephant',
            'giraffe'
        ];
    }
}