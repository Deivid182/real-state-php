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

      $errors = [];

      if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = mysqli_real_escape_string($db,(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)));
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $passwordHashed = password_hash($password, PASSWORD_BCRYPT);

        if(!$email) {
          $errors[] = 'The email is required';
        }

        if(!$password) {
          $errors[] = 'The password is required';
        }

        if(empty($errors)) {
          $query = "SELECT * FROM users WHERE email = '$email'";
          $result = mysqli_query($db, $query);

          if($result->num_rows) {
            $user = mysqli_fetch_assoc($result);
            $auth = password_verify($password, $user['password']);
            if($auth) {
              session_start();
              $_SESSION['email'] = $user['email'];
              $_SESSION['id'] = $user['id'];
              $_SESSION['auth'] = true;

              header('Location: /admin/index.php');

            } else {
              $errors[] = 'Invalid credentials';
            }
          } else {
            $errors[] = 'Invalid credentials';
          }
        }
      }

    ?>
    <main class="container section center-content">
      <h1>Log in to yout account</h1>

      <div class="errors">
        <?php foreach($errors as $error): ?>
          <div class="alert error">
            <?php echo $error; ?>
          </div>
        <?php endforeach; ?>
      </div>

      <form method="POST" class="form">
        <fieldset>
          <legend>Personal information</legend>

          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="jGKpA@example.com" required>

          <label for="phone">Password</label>
          <input type="password" id="password" name="password" required>

        </fieldset>

        <button class="btn-green-block mt-2" type="submit">
          Log in
        </button>
      </form>
    </main>
    <?php 
      getTemplate('footer');
    ?>
  </body>
</html>