<?php

  require_once __DIR__ . '/models/Movies.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 1</title>
</head>
<body>
  <header>
    <section>
      <h1>
        PHP OOP 1
      </h1>
    </section>
  </header>
  <main>
    <section>
      <div class="movie">
        <?php 
          $BackToTheFuture = new Movies('Back to the future', '1985', 'Adventure', 'Robert Zemeckis');
          $BackToTheFuturePartII = new Movies('Back to the future Part II', '1989', 'Adventure', 'Robert Zemeckis');
          $BackToTheFuturePartIII = new Movies('Back to the Future Part III', '1990', 'Adventure', 'Robert Zemeckis');

          echo '<pre>';
          echo $BackToTheFuture->toString();
          echo '<br>';
          echo $BackToTheFuturePartII->toString();
          echo '<br>';
          echo $BackToTheFuturePartIII->toString();
          echo '<br>';
          echo '</pre>'
        ?>
      </div>
    </section>
  </main>
</body>
</html>