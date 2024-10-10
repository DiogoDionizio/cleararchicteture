<?php

namespace SCA\Dominio\Student;

use SCA\Dominio\Cpf;
use SCA\Dominio\Email;
use SCA\Dominio\Student\Phone;

class Student
{
  private $id;
  private $name;
  private $cpf;
  private $email;
  private $phone;

  public function addPhone($ddd, $number)
  {
    $this->phone[] = new Phone($ddd, $number);
  }

  public function cpf()
  {
    return $this->cpf();
  }

  public function name()
  {
    return $this->name;
  }

  public function phones()
  {
    return $this->phone;
  }
}