<?php

class Product {
  protected $name;
  protected $price;
  protected $availability;
  protected $discount = 0;
  protected $description;
  protected $reviews;

  public function __construct($_name, $_price, $_description, $_availability = true, $_reviews = [])  
  {
    $this->name = $_name;
    $this->price = $_price;
    $this->availability = $_availability;
    $this->description = $_description;
    $this->reviews = $_reviews;
  }

  public function setDiscount( $_discount )
  {
    $this->discount = $_discount;
  }
}