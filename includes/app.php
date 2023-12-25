<?php

require 'utils.php';
require 'config/db.php';
require __DIR__ . '/../vendor/autoload.php';

$db = connectDB();

use App\ActiveRecord;

ActiveRecord::setDB($db);

?>