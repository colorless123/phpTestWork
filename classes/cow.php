<?php

class cow extends Farm{

    const nameAnimal = 'корова';
    const nameItem = 'молоко';

    public $lastItems;

    public $idAnimal;

    public function __construct() {
        $this->idAnimal = parent::$id++;
    }

    public function getItem(){
        $this->lastItems = rand(8, 12);
        return $this->lastItems;
    }

}