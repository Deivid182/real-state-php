<?php

function connectDB() : mysqli {
  $db = new mysqli('localhost', 'davejs', 'Davejs-21', 'real-estate');
  if(!$db) {
    die('Error connecting to database');
  }
  return $db;
}

?>