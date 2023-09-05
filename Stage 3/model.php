<?php

class Amiibo
{
        private $name;
        private $compatibility;
        private $description;
        private $price;
        private $image;

        public function __construct(string $name, string $compawith)
        {
                $this->name = $name;
                $this->compatibility = $compawith;
        }

        /**
         * Get the value of description
         */ 
        public function getDescription(): string
        {
                return $this->description;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setDescription(string $description): self
        {
                $this->description = $description;
                return $this;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice(): float 
        {
                return round( $this->price * 1.2, 2);
        }

        /**
         * Set the value of price
         *
         * @return  self
         */ 
        public function setPrice(float $price): self
        {
                $this->price = $price;
                return $this;
        }

        /**
         * Get the value of image
         */ 
        public function getImage(): string
        {
                return $this->image;
        }

        /**
         * Set the value of image
         *
         * @return  self
         */ 
        public function setImage(string $image)
        {
                $tab = explode(".", $image);
                $ext = array_pop($tab);
                if ($ext=="png" || $ext=="jpg" || $ext=="jpeg"){
                        $this->image = $image;
                }
                return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getName(): string
        {
                return $this->name;
        }

        /**
         * Get the value of compatibility
         */ 
        public function getCompatibility(): string
        {
                return $this->compatibility;
        }
}

$archer = new Amiibo("Link [Archer]", "Switch and Switch Lite");
$archer->setDescription("Cette flèche archéonique vous emmènera loin ! Découvrez
        vite les avantages de cet amiibo compatible avec de multiples jeux");
$archer->setPrice(58.25);
$archer->setImage("./asset/amiibo-link-archer_2x.png");


$zelda = new Amiibo("Zelda", "Switch, Wii U, Nintendo DS");
$zelda->setDescription("Ne sous-estimez pas la princesse Zelda ! Découvrez
        vite les avantages de cet amiibo compatible avec de multiples jeux");
$zelda->setPrice(62.41)->setImage("./asset/amiibo-zelda_2x.png");

$rider = new Amiibo("Link [Rider]", "Wii U, Switch, Siwtch Lite");
$rider->setDescription("Il y a des chevaux et puis il y a Epona ! Découvrez vite
        les avantages de cet amiibo compatible avec de multiples jeux");
$rider->setPrice(54.08);
$rider->setImage("./asset/amiibo-link-rider_2x.png");



/*  Q1

    Ecrire une class Tshirt telle que :
    Un Tshirt possède un nom (name), une description (description), un **tableau** de tailles (sizes)
    un prix (price) et une illustration (image).

    Pour créer un nouveau Tshirt, il faudra nécessairement donner un nom.
    L'ensemble des propriétés sera privées et vous définirez pour chacune un getter et un setter.
    Sauf pour la propriété name où vous ne définirez que une méthode getter.

    N'oubliez pas de préciser les types des paramètres ainsi que des valeurs de retour pour les getters.
*/

/*  Q2

    Instanciez 3 objets Tshirt et placez les dans le tableau $dataTshirt ci après.
    Regardez ./asset/objectif.png pour les valeurs à utiliser.
*/   

$dataAmiibo = [$archer, $zelda, $rider];
$dataTshirt = [/*???*/];

/*  Q3

    De manière analogue au traitement des Amiibos, complétez les fichiers view.php et index.php
    pour effectuer le rendu des Tshirt en plus de celui des Amiibos.
*/