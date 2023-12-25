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
    getTemplate('header');
    $db = connectDB();

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id) {
      header('Location: /index.php');
    }

    $query = "SELECT * FROM properties WHERE id = $id";

    $result = mysqli_query($db, $query);
    $property = mysqli_fetch_assoc($result);


    if (!$property) {
      header('Location: /index.php');
    }

  ?>
  <main class="container section center-content">
    <div class="advertisement">
      <img src="/images/<?php echo $property['image'] ?>" alt="destacada" loading="lazy">
      <div class="info-advertisement">
        <h3><?php echo $property['title'] ?></h3>
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
        <p>
          <?php echo $property['description'] ?>
        </p>
      </div>
    </div>
  </main>
  <?php 
    getTemplate('footer');
    mysqli_close($db);
  ?>
</body>

</html>