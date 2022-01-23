<?php
require_once __DIR__."/Position.php";

class User{
  private $firstname;
  private $lastname;
  private $mail;
  protected $discount = 0;
  private $card;

  use Position;

  function __construct($_firstname, $_lastname)
  {
    $this->firstname = $_firstname;
    $this->lastname = $_lastname;
  }

  public function setCreditCard($_number, $_cvv, $_expiration_m, $_expiration_y){
    try {
      $this->card = new CreditCard($_number, $_cvv, $_expiration_m, $_expiration_y);
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  // setter
  public function setFirstname($_firstname){
    $this->firstname = $_firstname;
  }

  public function setLastname($_lastname){
    $this->lastname = $_lastname;
  }

  public function setMail($_mail){
    $this->mail = $_mail;
  }

  public function setDiscount($_age){
    if($_age > 50) {
      $this->discount = 10;
    }
  }

  // getter
  public function getFirstname(){
    return $this->firstname;
  }

  public function getLastname(){
    return $this->lastname;
  }

  public function getMail(){
    return $this->mail;
  }

  public function getDiscount(){
    return $this->discount;
  }


}