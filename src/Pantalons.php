<?php

class Pantalons extends Vetements
{
    public $taille;

    public function __construct(int $prix_instance, int $disponibilite_instance, int $taille_instance)
    {
       parent::__construct($prix_instance, $disponibilite_instance);
       $this->taille = $taille_instance; 
    }

}