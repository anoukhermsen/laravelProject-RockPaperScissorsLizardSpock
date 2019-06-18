<?php

namespace Tests\Unit;

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
     * @var CpuChoiceGeneratorController | MockInterface
     */
    private $CpuChoiceGeneratorController;

    /**
     * @var ShowOutputController
     */
    private $subject;

    public function setUp()
    {
        $this->PlayGameService = \Mockery::mock(PlayGameService::class);
        $this->CpuChoiceGeneratorController = \Mockery::mock(CpuChoiceGeneratorController::class);
        $this->subject = new ShowOutputController($this->CpuChoiceGeneratorController, $this->PlayGameService);
    }

    public function testGetPlayersInformation()
    {
        // Prepare required values
        // Set Expectations
        // Execute the method
        // Compare result

        $this->CpuChoiceGeneratorController->expects('generate')
            ->once()
            ->andReturn('ROCK');

        $this->PlayGameService->expects('setCpu')
            ->once();

        $result = $this->subject->getPlayersInformation();
        $this->assertTrue(true);
    }
}
