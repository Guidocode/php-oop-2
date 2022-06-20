<?php

class Product {
  private $name;
  public $price;
  public $manufacturer;
  public $description;

  public function __construct($_name, $_price, $_manufacturer) {

    $this->name = $_name;
    $this->price = $_price;
    $this->manufacturer = $_manufacturer;
  }

  // setter 
  public function setName($_name) {
    $this->name = $_name;
  }

  // getter 
  public function getName() {
    return $this->name;
  }

}