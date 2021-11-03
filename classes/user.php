<?php

class User {
  protected $username;
  protected $password;
  protected $email;
  protected $cart;
  protected $orders;

  public function __construct( $_username, $_password, $_email, $_orders = [], $_cart = [] )
  {
    $this->username = $_username;
    $this->password = $_password;
    $this->email = $_email;
    $this->orders = $_orders;
    $this->cart = $_cart;
  }

  public function addToCart( $_product ) 
  {
    $this->cart[] = $_product;
  }

  public function getCart()
  {
    return $this->cart;
  }
}