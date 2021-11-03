<?php

class PremiumUser extends User {

  public function addToCart( $_product ) 
  {
    $_product->setDiscount(20);
    $this->cart[] = $_product;
  }
}