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
      use Intervention\Image\ImageManagerStatic as Image;
      require '../../includes/app.php';
            
      getTemplate('header');

      isAuth();

      $id = $_GET['id'] ?? null;
      $id = filter_var($id, FILTER_VALIDATE_INT);

      if(!$id) {
        header('Location: /admin/index.php');
      }

      $property = Property::getById($id);

      $errors = Property::getErrors();

      if($_FILES['property']['tmp_name']['image']) {
        $imageName = md5(uniqid(rand(), true));
        $fullImageName = $imageName . '.' . pathinfo($_FILES['property']['name']['image'], PATHINFO_EXTENSION);
        $image = Image::make($_FILES['property']['tmp_name']['image'])->fit(800, 600);
        $property->setImage($fullImageName);
        $image->save(IMAGES_URL . '/' . $fullImageName);
      }

      if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $args = [];

        $args = $_POST['property'];

        $property->pairWithClass($args);

        $errors = $property->checkErrors();

        if(empty($errors)) {
          
          $result = $property->update();

          if($result) {
            header('Location: /admin/?result=2');
          }
        }
      }
    ?>
    <main class="container section">
      <h1>Edit Property</h1>
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

      <form class="form" method="POST" enctype="multipart/form-data">
        <?php
          include '../../includes/templates/form-property.php';
        ?>
        <button class="btn-green-block" style="margin-top: 2rem;">
          Save
        </button>
      </form>
    </main>
    <?php
      getTemplate('footer');
    ?>
  </body>
</html>