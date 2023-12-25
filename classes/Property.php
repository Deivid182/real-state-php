<?php

namespace App;

class Property extends ActiveRecord {

  public static $columns = ['id', 'title', 'price', 'description', 'rooms', 'bathrooms', 'parking', 'image', 'created_at', 'seller_id'];

  protected static $table = 'properties';
  public static $errors = [];

  public $id;
  public $title;
  public $price;
  public $description;
  public $rooms;
  public $bathrooms;
  public $parking;
  public $image;
  public $created_at;
  public $seller_id;

  public function __construct($args = [])
  {
    $this->id = $args['id'] ?? null;
    $this->title = $args['title'] ?? '';
    $this->price = $args['price'] ?? '';
    $this->description = $args['description'] ?? '';
    $this->rooms = $args['rooms'] ?? '';
    $this->bathrooms = $args['bathrooms'] ?? '';
    $this->parking = $args['parking'] ?? '';
    $this->image = $args['image'] ?? '';
    $this->created_at = date('Y/m/d');
    $this->seller_id = $args['seller_id'] ?? 1;
  }

  public function save()
  {
    $data = $this->validateData();

    $newKeys = join(', ', array_keys($data));
    $newValues = join("', '", array_values($data));

    $query = "INSERT INTO " . static::$table . " ($newKeys) VALUES ('$newValues')";
    
    $result = self::$db->query($query);

    return $result;
  }

  public function update() {
    $data = $this->validateData();

    $values = [];

    foreach($data as $key => $value) {
      $values[] = "$key = '$value'";
    }

    $query = "UPDATE " . static::$table . " SET " . join(', ', $values) . "WHERE id = '" . self::$db->escape_string($this->id) . "' LIMIT 1";

    $result = self::$db->query($query);

    return $result;
  }

  public function delete() {
    $query = "DELETE FROM " . static::$table . " WHERE id = '" . self::$db->escape_string($this->id) . "' LIMIT 1";

    $result = self::$db->query($query);

    $this->deleteImage();

    return $result;
  }

  public function deleteImage() {
    $foundFile = file_exists(IMAGES_URL . $this->image);
    if($foundFile) {
      unlink(IMAGES_URL . $this->image);
    }
  }

  public function joinData() {
    $data = [];
    foreach(self::$columns as $key) {
      $data[$key] = $this->$key;
    }

    return $data;
  }

  public function setImage($image) {

    if($this->id) {
      $foundFile = file_exists(IMAGES_URL . $this->image);
      if($foundFile) {
        unlink(IMAGES_URL . $this->image);
      }
    }

    if($image) {
      $this->image = $image;
    }
  }

  public function validateData() {
    $data = $this->joinData();
    $sanitizedData = [];

    foreach($data as $key => $value) {
      if($key === 'id') continue;
      $sanitizedData[$key] = self::$db->escape_string($value);
    }

    return $sanitizedData;
  }

  public static function getErrors() {
    return self::$errors;
  }

  public function checkErrors() {
    if($this->title === '') self::$errors[] = 'The title is required';

    if($this->price === '') self::$errors[] = 'The price is required';

    if($this->description === '') self::$errors[] = 'The description is required';

    if($this->rooms === '') self::$errors[] = 'The rooms is required';

    if($this->bathrooms === '') self::$errors[] = 'The bathrooms is required';

    if($this->parking === '') self::$errors[] = 'The parking is required';

    if($this->seller_id === '') self::$errors[] = 'The seller id is required';

    if($this->image === '') self::$errors[] = 'The image is required';

    return self::$errors;
  }


  public static function getAll() {
    $query = "SELECT * FROM " . static::$table;
    $result = self::processQuery($query);

    return $result;
  }

  public static function createObject($data) {
    $object = new self;

    foreach($data as $key => $value) {
      if(property_exists($object, $key)) {
        $object->$key = $value;
      }
    }
    return $object;
  }


  public static function getById($id) {
    $query = "SELECT * FROM " . static::$table . " WHERE id = $id";
    $result = self::processQuery($query);
    
    return array_shift($result);
  }

  public function pairWithClass ($args = []) {
    foreach($args as $key => $value) {
      if(property_exists($this, $key) && !empty($value)) {
        $this->$key = $value;
      }
    }
  }
}