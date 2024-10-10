<?php

namespace SCA\Dominio\Student;

class Phone
{
  private $ddd;
  private $number;

  public function __construct($ddd, $number)
  {
    $this->setDdd($ddd);
    $this->setNumber($number);
  }

  private function setDdd($number)
  {
    $options = [
      'options' => [
        'regexp' => '/\d{2}/'
      ]
    ];
    if (filter_var($number, FILTER_VALIDATE_REGEXP, $options) === false) {
      throw new \InvalidArgumentException("Error invalid DDD");
    }

    $this->ddd = $number;
  }

  private function setNumber($number)
  {
    $options = [
      'options' => [
        'regexp' => '/\d{9}/'
      ]
    ];
    if (filter_var($number, FILTER_VALIDATE_REGEXP, $options) === false) {
      throw new \InvalidArgumentException("Error invalid phone number");
    }

    $this->number = $number;
  }

  public function __toString()
  {
    return $this->ddd . $this->number;
  }
}