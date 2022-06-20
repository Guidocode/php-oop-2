<?php

require_once __DIR__ . '/Product.php';

class Game extends Product{
  private $type;
  public $size;

  public function __construct($_name, $_price, $_manufacturer, $_type, $_size) {

    parent::__construct($_name, $_price, $_manufacturer);

    $this->type = $_type;
    $this->quantity = $_size;
  }

  // setter 
  public function setType($_type) {
    $this->type = $_type;
  }

  // getter 
  public function getType() {
    return $this->type;
  }
}