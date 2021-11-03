<?php

class CreditCard {
  protected $number;
  protected $accountholder;
  protected $expiryDate;
  protected $CVV;
  
  public function __construct($_number, $_accountholder, $_expiryDate, $_CVV)
  {
    $this->number = $_number;
    $this->accountholder = $_accountholder;
    $this->expiryDate = $_expiryDate;
    $this->CVV = $_CVV;
  }

  public function setNumber( $_newNumber )
  {
    if ( !is_numeric($_newNumber) )
    {
      throw new Exception("devi passare un numero");
    }
    else 
    {
      $this->number = $_newNumber;
    }
  }
}