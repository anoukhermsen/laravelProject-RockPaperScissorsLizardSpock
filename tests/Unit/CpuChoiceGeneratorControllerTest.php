<?php

use App\Http\Controllers\CpuChoiceGeneratorController;
use PHPUnit\Framework\TestCase;

class CpuChoiceGeneratorControllerTest extends TestCase
{
    public function testGenerate()
    {
        $subject = new CpuChoiceGeneratorController();
        $result = $subject->generate();

        $this->assertIsString($result);
    }
}

