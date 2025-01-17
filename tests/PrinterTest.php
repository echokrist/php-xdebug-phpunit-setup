<?php

use PHPUnit\Framework\TestCase;
use App\Printer;

class PrinterTest extends TestCase
{
    public function testPrint()
    {
        $printer = new Printer();
        $this->expectOutputString('Hello Tests!');
        $printer->print('Hello Tests!');
    }
}