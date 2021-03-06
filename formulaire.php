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
      <title>Test POO</title>
</head>
<body>

      <?php require 'views/nav.php'; ?>
      
      <div class="form-cont">
            <h1>Classe Formulaire</h1>
            <?php 
                  $form = new Form;

                  $form->create();
                  $form->radio("genre", ["Mme", "Mr", "Autre"]);
                  $form->text("nom");
                  $form->text("prenom");
                  $form->select("pays", ["Belgique", "France", "Pays-Bas", "Italie"]);
                  $form->submit("envoyer");
                  $form->end();
            ?>
      </div>
</body>
</html>
