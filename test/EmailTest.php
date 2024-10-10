<?php

namespace SCA\Test;

use SCA\Dominio\Email;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class EmailTest extends Testcase
{
  public function testEmailFormatInvalid()
  {
    $this->expectException(\InvalidArgumentException::class);
    new Email('iniciodominio.com');
  }

  public function testEmailFormatValid()
  {
    $email = new Email('inicio@dominio.com');
    $this->assertEquals('inicio@dominio.com', $email);
  }
}