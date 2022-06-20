<?php

require_once __DIR__ . '/Product.php';

class Food extends Product{
  private $batch_number;
  public $quantity;

  public function __construct($_name, $_price, $_manufacturer, $_batch_number, $_quantity) {

    parent::__construct($_name, $_price, $_manufacturer);

    $this->batch_number = $_batch_number;
    $this->quantity = $_quantity;
    
  }

  // setter 
  public function setBatch($_batch_number) {
    $this->batch_number = $_batch_number;
  }

  // getter 
  public function getBatch() {
    return $this->batch_number;
  }
}