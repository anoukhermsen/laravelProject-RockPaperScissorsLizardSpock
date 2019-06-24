<?php

use App\Http\Controllers\CpuChoiceGenerator;
use PHPUnit\Framework\TestCase;

class CpuChoiceGeneratorControllerTest extends TestCase
{
    public function testGenerate()
    {
        $subject = new CpuChoiceGenerator();
        $result = $subject->generate();

        $this->assertIsString($result);
    }
}

