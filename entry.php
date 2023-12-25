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
    ?>
    <main class="container section center-content">
      <h4>Terrace on the roof</h4>
      <article>
        <div class="image"> 
          <picture>
            <source srcset="build/img/blog1.webp" type="image/webp">
            <source srcset="build/img/blog1.jpg" type="image/jpeg">
            <img src="build/img/blog1.jpg" alt="blog1" loading="lazy">
          </picture>
        </div>
        <div class="info-blog">
          <a href="entry.html">
            <p>Written on: <span>20/03/2023</span> by: <span>Admin</span></p>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam sunt fugiat officia aspernatur sit? Accusamus alias debitis at dolorem mollitia.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit cumque qui autem corrupti voluptatem, nam recusandae quam? Earum, et aliquid?
            </p>
          </a>
        </div>
      </article>
    </main>
    <?php 
    getTemplate('footer');
    ?>
  </body>
</html>