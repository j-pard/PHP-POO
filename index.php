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
      
      <div>
            <h1>Apprentissage de la POO en PHP</h1>
            
      </div>
</body>
</html>
