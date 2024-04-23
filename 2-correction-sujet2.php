<?php

    // --------------------------Exercice 3-----------------------------

    interface Nageur
    {
        public function nager();
    }

    interface Voleur
    {
        public function voler();
    }
    
    class SuperHero implements Nageur, Voleur
    {
        public function nager()
        {

        }

        public function voler()
        {
            
        }
    }

    // --------------------------Exercice 2-----------------------------

    // interface Vehicule
    // {
    //     public function demarrer();

    //     public function arreter();
    // }

    // class Voiture implements Vehicule
    // {
    //     public function demarrer()
    //     {

    //     }

    //     public function arreter()
    //     {

    //     }
    // }



    // --------------------------Exercice 1-----------------------------
    
    // abstract class Forme
    // {
    //     abstract public function calculerSurface() : int|float;
    // }

    // class Cercle extends Forme
    // {
    //     private int|float $rayon = 0;

    //     public function __construct(int|float $rayon)
    //     {
    //         $this->rayon = $rayon;
    //     }

    //     public function calculerSurface() : int|float
    //     {
    //         return pi() * ($this->rayon * $this->rayon);
    //     }
    // }

    // class Rectangle extends Forme
    // {
    //     private int|float $longueur = 0;
        
    //     private int|float $largeur = 0;

    //     public function __construct(int|float $longueur, int|float $largeur)
    //     {
    //         $this->longueur = $longueur;
    //         $this->largeur  = $largeur;
    //     }

    //     public function calculerSurface() : int|float
    //     {
    //         return $this->longueur * $this->largeur;
    //     }
    // }

    // $cercle    = new Cercle(46);
    // $rectangle = new Rectangle(8, 32);

    // echo $cercle->calculerSurface();
    // echo "<br/>";
    // echo $rectangle->calculerSurface();



