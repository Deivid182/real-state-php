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
      getTemplate('header', $start = true);
    ?>
    <main class="container section">
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
    </main>
    <section class="section container">
      <h2>Luxury houses and apartments</h2>
      <?php
        getTemplate('properties');
      ?>
      <div class="view-all">
        <a href="advertisements.php" class="btn-green">
          View All
        </a>
      </div>
    </section>
    <section class="image-contact section">
      <h2>Find your dream home</h2>
      <p>Fill out the form and we will contact you</p>
      <a href="contact.php" class="btn btn-contact">Contact us</a>
    </section>

    <div class="section container inferior-section">
      <section class="blog">
        <h3>Our Blog</h3>
        <div class="blog-container">
          <article class="blog-card">
            <div class="image"> 
              <picture>
                <source srcset="build/img/blog1.webp" type="image/webp">
                <source srcset="build/img/blog1.jpg" type="image/jpeg">
                <img src="build/img/blog1.jpg" alt="blog1" loading="lazy">
              </picture>
            </div>
            <div class="info-blog">
              <a href="entry.php">
                <h4>Terrace on the roof</h4>
                <p>Written on: <span>20/03/2023</span> by: <span>Admin</span></p>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam sunt fugiat officia aspernatur sit? Accusamus alias debitis at dolorem mollitia.
                </p>
              </a>
            </div>
          </article>
          <article class="blog-card">
            <div class="image"> 
              <picture>
                <source srcset="build/img/blog1.webp" type="image/webp">
                <source srcset="build/img/blog1.jpg" type="image/jpeg">
                <img src="build/img/blog1.jpg" alt="blog1" loading="lazy">
              </picture>
            </div>
            <div class="info-blog">
              <a href="entry.php">
                <h4>Terrace on the roof</h4>
                <p>Written on: <span>20/03/2023</span> by: <span>Admin</span></p>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam sunt fugiat officia aspernatur sit? Accusamus alias debitis at dolorem mollitia.
                </p>
              </a>
            </div>
          </article>
          <article class="blog-card">
            <div class="image"> 
              <picture>
                <source srcset="build/img/blog2.webp" type="image/webp">
                <source srcset="build/img/blog2.jpg" type="image/jpeg">
                <img src="build/img/blog2.jpg" alt="blog2" loading="lazy">
              </picture>
            </div>
            <div class="info-blog">
              <a href="entry.php">
                <h4>Terrace on the roof</h4>
                <p>Written on: <span>20/03/2023</span> by: <span>Admin</span></p>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam sunt fugiat officia aspernatur sit? Accusamus alias debitis at dolorem mollitia.
                </p>
              </a>
            </div>
          </article>
        </div>
      </section>
      <div class="testimonials">
        <h3>Testimonials</h3>
        <div class="testimonial">
          <blockquote>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti neque sequi cupiditate cum nobis minus dolore itaque vero, quidem officiis illum exercitationem praesentium eveniet molestiae?
          </blockquote>
          <p>- Dave</p>
        </div>
      </div>
    </div>

    <?php 
      getTemplate('footer');
    ?>
  </body>
</html>