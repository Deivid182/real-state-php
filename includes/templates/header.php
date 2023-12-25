<?php 
  if(!isset($_SESSION)) {
    session_start();
  }

  $auth = $_SESSION['auth'] ?? false;

?>

<header class="header <?php echo $start ? 'start' : '';?>">
  <div class="container <?php echo $start ? 'header-container' : '';?>">
    <div class="bar">
      <a href="/index.php">
        <img src="/build/img/logo.svg" alt="logo">
      </a>
      <div class="mobile-menu">
        <img src="/build/img/barras.svg" width="40" height="40" alt="menu" loading="lazy">
      </div>
      <div class="right">
        <img src="/build/img/dark-mode.svg" width="40" height="40" alt="dark-mode" class="dark-mode-btn">
        <nav class="navigation">
          <a href="about.php">About us</a>
          <a href="contact.php">Contact</a>
          <a href="advertisements.php">Advertisements</a>
          <a href="blog.php">Blog</a>
          <?php if($auth) : ?>
            <a href="logout.php">Log out</a>
          <?php endif; ?>
        </nav>
      </div>
    </div>
    <?php if($start) { ?>
    <h1>
      Sale of exclusive luxury houses and apartments
    </h1>
    <?php }?>
  </div>
</header>