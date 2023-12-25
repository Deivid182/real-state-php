<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Real Estate</title>
  <link rel="stylesheet" href="build/css/app.css">
</head>

<body>
  <?php

  require 'includes/app.php';
  $db = connectDB();

  $query = "SELECT * FROM properties ORDER BY created_at DESC";
  $properties = mysqli_query($db, $query);

  getTemplate('header');
  ?>
  <main class="container section">
    <h2>Luxury houses and apartments</h2>
    <div class="container-advertisements">
      <?php while ($property = mysqli_fetch_assoc($properties)) : ?>
        <div class="advertisement">
          <img src="/images/<?php echo $property['image'] ?>" alt="anuncio1" loading="lazy">
          <div class="info-advertisement">
            <h3>
              <?php echo $property['title'] ?>
            </h3>
            <p>
              <?php echo $property['description'] ?>
            </p>
            <span class="price">$ <?php echo $property['price'] ?></span>
            <ul class="feature-icons">
              <li>
                <img src="build/img/icono_wc.svg" alt="wc" loading="lazy">
                <p>
                  <?php echo $property['bathrooms'] ?>
                </p>
              </li>
              <li>
                <img src="build/img/icono_estacionamiento.svg" alt="estacionamiento" loading="lazy">
                <p>
                  <?php echo $property['parking'] ?>
                </p>
              </li>
              <li>
                <img src="build/img/icono_dormitorio.svg" alt="dormitorio" loading="lazy">
                <p>
                  <?php echo $property['rooms'] ?>
                </p>
              </li>
            </ul>
            <a href="advertisement.php?id=<?php echo $property['id'] ?>" class="btn btn-yellow">
              More info
            </a>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </main>

  <?php
    getTemplate('footer');
    mysqli_close($db);
  ?>
</body>

</html>