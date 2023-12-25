<?php

namespace App;

class Seller extends ActiveRecord {
 
  public static $columns = [];
  protected static $table = 'sellers';

  public $id;
  public $name;
  public $first_name;
  public $last_name;
  public $phone;

  public function __construct($args = [])
  {
    $this->id = $args['id'] ?? null;
    $this->name = $args['name'] ?? '';
    $this->first_name = $args['first_name'] ?? '';
    $this->last_name = $args['last_name'] ?? '';
    $this->phone = $args['phone'] ?? '';
  }
}

?>