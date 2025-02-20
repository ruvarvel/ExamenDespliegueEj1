<?php

namespace tests;

use App\Factorial;
use PHPUnit\Framework\TestCase;

class FactorialTest extends TestCase
{
    public function testFactorial(){
        $fact = new Factorial();
        $resultado = $fact -> calcularFactorial(5);
        $this->assertEquals(120, $resultado);
    }
}
