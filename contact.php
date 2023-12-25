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
      <h1>Contact</h1>
      <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img src="build/img/destacada3.jpg" alt="destacada3" loading="lazy">
      </picture>
      <p>
        Fill out the form below and we will get back to you as soon as possible
      </p>
      <form class="form">
        <fieldset>
          <legend>Personal information</legend>
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="John Doe">

          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="jGKpA@example.com">

          <label for="phone">Phone</label>
          <input type="tel" id="phone" name="phone" placeholder="123-456-7890">

          <label for="message">Message</label>
          <textarea id="message" name="message"></textarea>
        </fieldset>
        <fieldset>
          <legend>Property information</legend>

          <label for="options">Sale or purchase</label>
          <select name="options" id="options">
            <option value="" disabled selected>Select an option</option>
            <option value="sale">Sale</option>
            <option value="purchase">Purchase</option>
          </select>

          <label for="price">Price or budget</label>
          <input type="number" id="price" name="price" placeholder="100000">
        </fieldset>
        <fieldset>
          <legend>Contact</legend>
          <p>how we can contact you?</p>
          <div class="form-contact">
            <label for="phone-contact">Phone</label>
            <input type="radio" id="phone-contact" name="contact" value="phone" placeholder="123-456-7890">

            <label for="email-contact">Email</label>
            <input type="radio" id="email-contact" name="contact" value="email" placeholder="123-456-7890">
          </div>

          <p>
            If you want to contact by phone, please fill out the form below
          </p>
          <label for="date">Date</label>
          <input type="date" id="date" name="date">

          <label for="time">Time</label>
          <input type="time" id="time" name="time" min="09:00" max="18:00">
        </fieldset>
        <button class="btn-green-block" style="margin-top: 2rem;">
          Send
        </button>
      </form>
    </main>
    <?php 
    getTemplate('footer');
    ?>
  </body>
</html>