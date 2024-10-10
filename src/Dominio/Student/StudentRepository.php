<?php

namespace SCA\Dominio\Student;

interface StudentRepository
{
  /**
   * Create Student
   *
   * @param Student $student
   * @return void
   */
  public function create($student);

  /**
   * Find student by cpf
   *
   * @param Cpf $cpf
   * @return Student
   */
  public function findByCpf($cpf);

  /**
   * Get all Student
   *
   * @return Student[]
   */
  public function getAllStudent();
}