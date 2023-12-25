<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Real Estate</title>
  <link rel="stylesheet" href="/build/css/app.css">
</head>
  <body>
    <?php

      use App\Property;
      require '../includes/app.php';
      getTemplate('header');

      isAuth();

      $result = $_GET['result'] ?? null;
      
      $properties = Property::getAll();

      if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id) {

          $property = Property::getById($id);

          $result = $property->delete();

          if($result) {
            header('Location: /admin/index.php?result=3');
          }
        }
      }

      
    ?>
    <main class="container section">
      <h1>Home</h1>
      <?php if(intval($result) === 1) : ?>
        <div class="alert success">
          Property added successfully
        </div>
      <?php elseif(intval($result) === 2) : ?>
        <div class="alert success">
          Property updated successfully
        </div>
      <?php elseif(intval($result) === 3) : ?>
        <div class="alert success">
          Property deleted successfully
        </div>
      <?php endif; ?>
      <a href="/admin/properties/create.php" class="btn btn-green">
        Add property
      </a>

      <div class="properties">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Price</th>
              <th>Image</th>
              <th>Actions</th>
              <th>Seller</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($properties as $property) : ?>
              <tr>
                <td>
                  <?php echo $property->id; ?>
                </td>
                <td>
                  <?php echo $property->title; ?>
                </td>
                <td>
                  <?php echo $property->price; ?>
                </td>
                <td>
                  <?php
                    $imagePath = '/images/' . $property->image;
                  ?>
                  <img src="<?php echo $imagePath?>" class="property-image" alt="property-image">
                </td>
                <td>
                  <a href="/admin/properties/update.php?id=<?php echo $property->id; ?>" class="btn-green-block">
                    Edit
                  </a>
                  <form method="POST" class="w-100">
                    <input type="hidden" name="id" value="<?php echo $property->id; ?>">
                    <button type="submit" class="btn-red-block">
                      Delete
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

    </main>
    <?php
      getTemplate('footer');
    ?>
  </body>
</html>