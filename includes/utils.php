<?php

  define('TEMPLATES_URL', __DIR__ . '/templates');
  define('UTILS_URL', __DIR__ . '/assets.php');
  define('IMAGES_URL', __DIR__ . '/../images');

  function getTemplate($filename, $start = false) {
    require TEMPLATES_URL . '/' . $filename . '.php';
  }

  function isAuth(){
    session_start();
    
    if(!$_SESSION['id']) {
      header('Location: /');
    }
  }

  function debugCode($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    exit;
  }

  function sanitizeHTML($data) {
    $scapedData = htmlspecialchars($data);
    return $scapedData;
  }
?>