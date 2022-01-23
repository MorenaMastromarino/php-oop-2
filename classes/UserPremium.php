<?php
require_once __DIR__."/User.php";

class UserPremium extends User {
  private $level;

  function __construct($_name, $_lastname, $_level)
  {
    parent::__construct($_name, $_lastname);
    $this->level = $_level;
  }

  public function setLevel($_level){
    $this->level = $_level;
  }

  public function getLevel(){
    return $this->level;
  }

  
  public function getDiscount(){
    $this->discount = parent::getDiscount() + $this->level * 10;
    return $this->discount;
  }

}