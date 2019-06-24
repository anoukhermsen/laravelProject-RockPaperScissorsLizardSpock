<?php

namespace Tests\Unit;

use App\Http\Controllers\CpuChoiceGenerator;
use App\Http\Controllers\ShowOutputController;
use App\Service\PlayGameService;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use App\Http\Controllers\CpuChoiceGeneratorController;

class ShowOutputControllerTest extends TestCase
{
    /**
     * @var PlayGameService | MockInterface
     */
    private $PlayGameService;

    /**
     * @var CpuChoiceGenerator | MockInterface
     */
    private $CpuChoiceGenerator;

    /**
     * @var ShowOutputController
     */
    private $subject;

    public function setUp()
    {
        $this->PlayGameService = \Mockery::mock(PlayGameService::class);
        $this->CpuChoiceGenerator = \Mockery::mock(CpuChoiceGenerator::class);
        $this->subject = new ShowOutputController($this->CpuChoiceGenerator, $this->PlayGameService);
    }

    public function testGetPlayersInformation()
    {
        // Prepare required values
        // Set Expectations
        // Execute the method
        // Compare result

        $this->CpuChoiceGenerator->expects('generate')
            ->once()
            ->andReturn('ROCK');

        $this->PlayGameService->expects('setCpu')
            ->once();

        $result = $this->subject->getPlayersInformation();
        $this->assertTrue(true);
    }
}
