<?php
    class Maison{
        private $nom;
        private $longueur;
        private $largeur;
        private $nbrEtage;

        public function __construct($name, $length, $width, $floorNbr){
            $this->nom = $name;
            $this->longueur = $length;
            $this->largeur = $width;
            $this->nbrEtage = $floorNbr;
        }

        public function surface(){
            echo "<p>La surface de la maison ".$this->nom." est égale à ".($this->longueur*$this->largeur)*$this->nbrEtage." m²  et a ".$this->nbrEtage." étages</p>";
        }

        public function getNom(){
            return $this->nom;
        }        
        
        public function getLongueur(){
            return $this->longueur;
        }        
        
        public function getLargeur(){
            return $this->largeur;
        }

        public function setNom($nom){
            $this->nom = $nom;
        }    

        public function setLongueur($longueur){
            $this->longueur = $longueur;
        }        
        
        public function setLargeur($largeur){
            $this->largeur = $largeur;
        }

    }
?>