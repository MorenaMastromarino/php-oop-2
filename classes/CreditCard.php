<?php

class CreditCard {
  private $number;
  private $cvv;
  private $expiration_m;
  private $expiration_y;

  function __construct($_number, $_cvv, $_expiration_m, $_expiration_y)
  {
    $this->number = $this->checkValidNumber($_number);
    $this->cvv = $this->checkValidCvv($_cvv);
    $this->expiration_m =  $_expiration_m;
    $this->expiration_y = $_expiration_y;
  }

  // controlli
  private function checkValidNumber($number){
    if(!is_numeric($number) || strlen($number) != 12) {
      throw new Exception('Numero carta non valido');
    }
    return $number;
  }

  private function checkValidCvv($cvv){
    if(!is_numeric($cvv) || strlen($cvv) != 3) {
      throw new Exception('cvv non valido');
    }
    return $cvv;
  }

  // setter
  public function setNumber($_number){
    $this->number = $_number;
  }

  public function setCvv($_cvv){
    $this->cvvr = $_cvv;
  }

  public function setExpiration_m($_expiration_m){
    $this->expiration_m = $_expiration_m;
  }

  public function setExpiration_y($_expiration_y){
    $this->expiration_y = $_expiration_y;
  }


  // getter
  public function getNumber(){
    return $this->number;
  }

  public function getCvv(){
    return $this->cvv;
  }

  public function getExpiration_m(){
    return $this->expiration_m;
  }

  public function getExpiration_y(){
    return $this->expiration_y;
  }



}