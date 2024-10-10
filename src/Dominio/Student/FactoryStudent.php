<?php

namespace SCA\Dominio\Student;

use SCA\Cpf;
use SCA\Email;
use SCA\Student\Student;

class FactoryStudent
{
  private $student;

  public static function createCpfEmailName($cpf, $email, $name)
  {
    $this->student = new Student(new Cpf($cpf), $name, new Email($email));
    return $this;
  }

  public function addPhone($ddd, $number)
  {
    $this->student->addPhone($ddd, $number);
    return $this;
  }

  public function student()
  {
    $this->student;
  }
}