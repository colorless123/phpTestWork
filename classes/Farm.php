<?php

abstract class Farm {

    static $id = 0;
    public $idAnimal = 0;
    public $lastItems;

    public abstract function getItem();

    public function getClass()
    {
        return static::class;
    }

}