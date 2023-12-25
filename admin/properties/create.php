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

      require '../../includes/app.php';
      getTemplate('header');
      
      use App\Property;
      use Intervention\Image\ImageManagerStatic as Image;
      
      $query_sellers = "SELECT id, first_name FROM sellers";
      $sellers = mysqli_query($db, $query_sellers);
      $errors = Property::getErrors();

      $property = new Property();

      if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $property = new Property($_POST);
        
        $folder = '../../images/';
        
        if($_FILES['image']['tmp_name']) {
          $imageName = md5(uniqid(rand(), true));
          $fullImageName = $imageName . '.' . strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
          
          $image = Image::make($_FILES['image']['tmp_name'])->fit(800, 600);
          $property->setImage($fullImageName);
          $image->save($folder . $fullImageName);
        }
        
        $errors = $property->checkErrors();

        if(empty($errors)) {
          if(!is_dir($folder)) {
            mkdir($folder);
          }
          
          $result = $property->save();

          if($result) {
            header('Location: /admin?result=1');
          }
        }
      }
    ?>
    <main class="container section">
      <h1>New Property</h1>
      <a href="/admin/index.php" class="btn btn-green">
        Back
      </a>
      <div class="errors">
        <?php foreach($errors as $error) : ?>
          <div class="alert error">
            <?php echo $error; ?>
          </div>
        <?php endforeach; ?>
      </div>

      <form class="form" method="POST" action="/admin/properties/create.php" enctype="multipart/form-data">
        <?php include '../../includes/templates/form-property.php'; ?>
        <button style="margin-top: 2rem;" class="btn-green-block">
          Create
        </button>
      </form>
    </main>
    <?php
    mysqli_close($db);
      getTemplate('footer');
    ?>
  </body>
</html>