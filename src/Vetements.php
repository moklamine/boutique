<?php

class Vetements
{
    public $prix;
    public $disponibilite;

    public function __construct(int $prix_instance, int $disponibilite_instance)
    {
        $this->prix = $prix_instance; 
        $this->disponibilite = $disponibilite_instance; 
    }
}