<?php

namespace Alura\Arquitetura;

class Cpf
{
  private $cpf;

  public function __construct($cpf)
  {
    $this->setNumber($cpf);
  }

  private function setNumber($number)
  {
    $options = [
      'options' => [
        'regexp' => '/\d{3}\.\d{3}\.\d{3}\-\d{2}/'
      ]
    ];
    if (filter_var($number, FILTER_VALIDATE_REGEXP, $options) === false) {
      throw new \InvalidArgumentException("Error invalid CPF");
    }

    $this->cpf = $number;
  }

  public function __toString()
  {
    return $this->cpf;
  }
}