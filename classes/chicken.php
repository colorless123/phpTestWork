<?php

class chicken extends Farm{

    const nameAnimal = 'курица';
    const nameItem = 'яйца';

    public $lastItems;

    public $idAnimal;

    public function __construct() {
        $this->idAnimal = parent::$id++;
    }

    public function getItem(){
        $this->lastItems = rand(0, 1);
        return $this->lastItems;
    }

}