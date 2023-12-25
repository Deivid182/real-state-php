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
    <main class="container section">
      <h2>About Us</h2>
      <div class="about-content">
        <div class="image">
          <picture>
            <source srcset="build/img/nosotros.webp" type="image/webp">
            <source srcset="build/img/nosotros.jpg" type="image/jpeg">
            <img src="build/img/nosotros.jpg" alt="nosotros" loading="lazy">
          </picture>
        </div>
        <div class="about-text">
          <blockquote>
            25 years of experience
          </blockquote>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, sapiente voluptatibus dolore aperiam ipsum fuga voluptate quis aut est suscipit qui esse officiis nisi, non doloremque. Ullam perspiciatis reiciendis omnis fugit expedita, optio delectus quae impedit ipsa neque. Sit accusantium assumenda velit ad! Quae, vel repellendus necessitatibus commodi maiores veniam laudantium inventore repellat, ad quia ex eius eaque ipsa modi?
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nulla perspiciatis earum eos rerum sunt est nam eaque? Expedita quas quidem sapiente quia maiores qui corporis praesentium ea, veritatis hic!
          </p>
        </div>
      </div>
    </main>
    <section class="container section">
      <h2>More about us</h2>
      <div class="about-icons">
        <div class="icon">
          <img src="build/img/icono1.svg" alt="security" loading="lazy">
          <h3>Security</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo ad quidem, qui quae voluptas alias recusandae consectetur debitis labore tempora?
          </p>
        </div>
        <div class="icon">
          <img src="build/img/icono2.svg" alt="price" loading="lazy">
          <h3>Price</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo ad quidem, qui quae voluptas alias recusandae consectetur debitis labore tempora?
          </p>
        </div>
        <div class="icon">
          <img src="build/img/icono3.svg" alt="time" loading="lazy">
          <h3>In time</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo ad quidem, qui quae voluptas alias recusandae consectetur debitis labore tempora?
          </p>
        </div>
      </div>
    </section>
    <?php 
      getTemplate('footer')
    ?>
  </body>
</html>