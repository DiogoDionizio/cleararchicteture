<?php

namespace Alura\Arquitetura\Test;

use Alura\Arquitetura\Cpf;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class CpfTest extends TestCase
{
  public function testCpfNumberNoFormatInvalidNotExist()
  {
    $this->expectException(\InvalidArgumentException::class);
    new Cpf('12345678910');
  }

  public function testCpfNumberFormatValidIsExist()
  {
    $cpf = new Cpf('123.456.789-10');
    $this->assertEquals('123.456.789-10', $cpf, 'expected cpf valid');
  }
}