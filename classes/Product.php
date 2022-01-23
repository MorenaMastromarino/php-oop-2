<?php

require_once __DIR__."/Position.php";


class Product {
  private $name;
  private $brand;
  private $price;
  private $description;

  use Position;

  function __construct($_name, $_price)
  {
    $this->name = $_name;
    $this->price = $_price;
  }

  // setter
  public function setName($_name){
    $this->name = $_name;
  }

  public function setPrice($_price){
    $this->price = $_price;
  }

  public function setBrand($_brand){
    $this->brand = $_brand;
  }

  public function setDescription($_description){
    $this->description = $_description;
  }

  // getter
  public function getName(){
    return $this->name;
  }

  public function getPrice(){
    return $this->price;
  }

  public function getBrand(){
    return $this->brand;
  }

  public function getDescription(){
    return $this->description;
  }


}