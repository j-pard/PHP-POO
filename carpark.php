<?php
      require 'classes/Autoloader.php';
      Autoloader::register();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="UTF-8">
      <?php
            $html = new Html;
            $html->meta("viewport", "width=device-width, initial-scale=1.0");
            $html->meta("author", "Jonathan Pardons");
            $html->meta("organisation", "BeCode");
            $html->css();
      ?>
      <title>POO - Parc automobile</title>
</head>
<body>

      <?php require 'views/nav.php'; ?>
      

      <?php
            $listeVoitures = [];
      /*
      -- Construction voiture --
      Tableaux d'entrées souhaité :
            $immat [str]
            $premiereImmat [str]
            $km [int]
            $marque [str]
            $modele [str]
            $couleur [str]
            $poids [float] (tonne)
            $photo [str]
      */

            $honda_1ECG559 = new Voiture([
                  "1-ECG-559",
                  "20-08-2005",
                  195680,
                  "Honda",
                  "Civic",
                  "Rouge",
                  1.4,
                  "https://www.cars-data.com/pictures/honda/honda-civic_894_1.jpg"
            ]);
            $listeVoitures[] = $honda_1ECG559;

            $audi_1LCL268 = new Voiture([
                  "1-LCL-268",
                  "11-02-2015",
                  55200,
                  "Audi",
                  "S5",
                  "Bleue",
                  1.8,
                  "https://www.cars-data.com/pictures/audi/audi-s5-sportback_3723_1.jpg"
            ]);
            $listeVoitures[] = $audi_1LCL268;

            $fiat_1DEG123 = new Voiture([
                  "1-DEG-123",
                  "30-11-2019",
                  25700,
                  "Fiat",
                  "Ducato",
                  "Gris",
                  3.5,
                  "https://www.cars-data.com/pictures/fiat/fiat-ducato-combinato_3300_1.jpg"
            ]);
            $listeVoitures[] = $fiat_1DEG123;
            $fiat_1DEG123->rouler();

      ?>

      <main>
            <h1>Parc automobile</h1>

            <table>
                  <tr>
                        <th>Immatriculation</th>
                        <th>Première immatriculation</th>
                        <th>Marque</th>
                        <th>Modèle</th>
                        <th>Kilométrage</th>
                        <th>Etat</th>
                        <th>Couleur</th>
                        <th>Poids</th>
                        <th>Catégorie</th>
                        <th>Photo</th>
                        <th>Réservée</th>
                  </tr>
                  <?php
                        foreach ($listeVoitures as $voiture) {
                              $voiture->afficher();
                        }
                   ?>
            </table>
      </main>
      
</body>
</html>
