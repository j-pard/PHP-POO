<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Test POO</title>
</head>
<body>

      <div>
            <h2>Classe Formulaire</h2>
            <?php 
                  require 'classes/Form.php';

                  $form = new Form([]);

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