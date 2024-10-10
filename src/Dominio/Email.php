<?php

namespace SCA\Dominio;

class Email
{
  private $address;

  public function __construct($address)
  {
    if (filter_var($address, FILTER_VALIDATE_EMAIL) === false) {
      throw new \InvalidArgumentException("Error Address invalid");
    }

    $this->address = $address;
  }

  public function __toString()
  {
    return $this->address;
  }
}