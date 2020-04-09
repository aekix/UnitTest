<?php
use PHPUnit\Framework\TestCase;
use App\Calc;

class calcTest extends TestCase
{
    /** @test */
    public function checkCalc()
    {
        $calc = new Calc();
        $this->assertSame($calc->add(4,5), 9);
        $this->assertSame($calc->minus(5,5), 0);
        $this->assertSame($calc->multiply(4,5), 20);
        $this->assertSame($calc->division(10,5), 2);
    }
}