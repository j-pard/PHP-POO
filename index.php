<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Test POO</title>
</head>
<body>

      <div>
            <h2>Classe Formulaire</h2>
            <?php 
                  require 'classes/Form.php';

                  $form = new Form([$_POST]);

                  echo $form->create();
                  echo $form->text("nom");
                  echo $form->text("prenom");
                  echo $form->submit("envoyer");
                  echo $form->end();
            ?>
      </div>
</body>
</html>