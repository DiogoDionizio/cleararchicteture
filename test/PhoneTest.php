<?php

namespace Alura\Arquitetura\Test;

use Alura\Arquitetura\Phone;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class PhoneTest extends TestCase
{
  public function testInvalidDdd()
  {
    $this->expectException(\InvalidArgumentException::class);
    new Phone('1', '123456789');
  }

  public function testInvalidPhoneNumber()
  {
    $this->expectException(\InvalidArgumentException::class);
    new Phone('11', '12345678');
  }

  public function testValidPhoneNumber()
  {
    $phone = new Phone('11', '123456789');
    $this->assertEquals('11123456789', $phone, 'expected ddd and phone valid');
  }
}