<?php

namespace SCA\Infra\Student;

use SCA\Dominio\Student\StudentRepository;
use SCA\Dominio\Student\Student;

class RepositoryStudentWithPDO implements StudentRepository
{

  private $con;

  public function __construct(\PDO $con)
  {
    $this->con = $con;
  }

  public function create($student)
  {
    $sql = 'INSERT INTO students VALUES(:cpf, :name, :email);';
    $stmt = $this->con->prepare($sql);
    $stmt->bindValue('cpf', $student->cpf());
    $stmt->bindValue('name', $student->name());
    $stmt->bindValue('email', $student->email());
    $stmt->execute();

    foreach($student->phones() as $phone) {
      $sql = 'INSERT INTO phones VALUES(:ddd, :number, :cpf);';
      $stmt = $this->con->prepare($sql);
      $stmt->bindValue('ddd', $student->ddd());
      $stmt->bindValue('ddd', $student->ddd());
      $stmt->bindValue('ddd', $student->ddd());
    }
  }
}