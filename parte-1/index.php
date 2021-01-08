<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title>dischi-con-PHP-1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- PER LA VISUALIZZAZIONE -->

    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <!-- PER IL MIO CSS -->

  </head>
  <body>
    <!-- riporto l'array di dischi, con formattazione in PHP -->
    <?php
      // collegamento al file PHP nel quale è presente il database
      require_once __DIR__ .'/db.php';
    ?>

    <div class="container">

      <ul>

        <?php
          foreach ($dischi as $key => $disco) {
            if ($key == 'response') {
              foreach ($disco as $disco_car) {
        ?>
        <!-- ad ogni li corrisponderà un disco -->
        <li class="card">
          <h1><?php echo($disco_car['title']); ?></h1>
          <h2><?php echo($disco_car['author']); ?></h2>
          <p><?php echo($disco_car['genre']." ".$disco_car['year']); ?></p>
          <img src="<?php echo($disco_car['poster']); ?>" alt="poster">
        </li>
        <?php
              }
            }
          }
        ?>

      </ul>

    </div>

  </body>
</html>
