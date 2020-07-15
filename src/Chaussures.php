<?php

class Chaussures extends Vetements
{
    public $pointure;


    public function __construct(int $prix_instance, int $disponibilite_instance, int $pointure_instance)
    {
       parent::__construct($prix_instance, $disponibilite_instance);
       $this->poiture = $pointure_instance; 
    }

}