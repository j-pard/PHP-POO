<?php

      class Voiture {
            private $immat;
            private $premiereImmat;
            private $marque;
            private $modele;
            private $km;
            private $etat;
            private $couleur;
            private $poids;
            private $categorie;
            private $photo;
            private $reserved;

            public function __construct($entries = []) {
                  $this->immat = $entries[0];
                  $this->premiereImmat = $entries[1];
                  $this->km = $entries[2];
                  $this->marque = $entries[3];
                  $this->modele = $entries[4];
                  $this->couleur = $entries[5];
                  $this->poids = $entries[6];
                  $this->photo = "<img src='" . $entries[7] . "'>";

                  $this->setReserved();
                  $this->setEtat();
                  $this->setCategory();
            }


            // GETTER/SETTER --------------
            public function getReserved() {
                  return $this->reserved;
            }

            private function setReserved() {
                  if($this->marque == 'Audi') {
                        $this->reserved = "Oui";
                  }
                  else {
                        $this->reserved = "Non";
                  }
            }

            public function getMarque() {
                  return $this->marque;
            }

            public function setKm($km) {
                  $this->km = $km;
            }

            public function getKm() {
                  return $this->km;
            }

            public function setEtat() {
                  if($this->km < 100000) {
                        $this->etat = "Neuf";
                  }
                  else if($this->km >= 100000 && $this->km < 200000) {
                        $this->etat = "Moyen";
                  }
                  else if($this->km >= 200000) {
                        $this->etat = "Usé";
                  }
            }
      
            public function setCategory() {
                  if($this->poids >= 3.5) {
                        $this->categorie = "Utilitaire";
                  }
                  else {
                        $this->categorie = "Commerciale";
                  }
            }

            // METHODS --------------
            public function rouler() {
                  // Augmente le kilométrage de 100.000
                  $newKm = $this->getKm() + 100000;
                  $this->setKm($newKm);
                  $this->setEtat();
            }

            public function afficher() {
                  echo "<tr>";
                  foreach ($this as $key => $value) {
                        echo "<td>" . $value . "</td>";
                  }
                  echo "</tr>";
            }
      }

?>