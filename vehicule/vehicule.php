<?php
    class Vehicule{
        private $nomVehicule;
        private $nbrRoue;
        private $vitesse;

        public function __construct($vehicleName, $wheels, $speed){
            $this->nomVehicule = $vehicleName;
            $this->nbrRoue = $wheels;
            $this->vitesse = $speed;
        }

        public function getNom(){
            return $this->nomVehicule;
        }        
        
        public function getRoues(){
            return $this->nbrRoue;
        }        
        
        public function getVitesse(){
            return $this->vitesse;
        }

        public function setNom($nom){
            $this->nomVehicule = $nom;
        }
        
        public function setRoues($roues){
            $this->nbrRoue = $roues;
        }  

        public function setVitesse($vitesse){
            $this->vitesse = $vitesse;
        }

        public function detect(){
            if($this->nbrRoue == 2){
                return "moto";
            } else if($this->nbrRoue == 4){
                return "voiture";
            }
        }

        public function boost(){
            return $this->vitesse += 50;
        }

        public function plusRapide($vehicule2){
            if($this->vitesse < $vehicule2->vitesse){
                return $vehicule2->getNom();
            } else {
                return $this->getNom();
            }
        }

        public function __toString(){
            return $this->nomVehicule;
        }
    }
?>