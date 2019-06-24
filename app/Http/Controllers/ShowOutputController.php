<?php


namespace App\Http\Controllers;

use App\Service\PlayGameService;

class ShowOutputController extends Controller
{
    /**
     * @var PlayGameService
     */
    private $playGameService;

    /**
     * @var CpuChoiceGenerator
     */
    private $cpuChoiceGenerator;

    public function __construct(CpuChoiceGenerator $cpuChoiceGenerator, PlayGameService $playGameService)
    {
        $this->cpuChoiceGenerator = $cpuChoiceGenerator;
        $this->playGameService = $playGameService;
    }

    public function showWelcomePage()
    {
        return view('welcome');
    }

    /**
     * @todo rename
     * @todo describe functionality
     * @throws \Exception
     */
    public function getPlayersInformation()
    {
        $this->playGameService->setCpu('cpu1', $this->playGameService->getCpuChoice());
        $this->playGameService->setPlayer(request('name'), request('choice'));
        $gameResult = $this->playGameService->play();

        return view('welcome', [
            'showOutcome' => true,
            'userInput' => [
                'name' => request('name'),
                'choice' => request('choice')
            ],
            'cpuInput' => [
                'name' => 'cpu1',
                'choice' => $this->playGameService->getCpuChoice()
            ],
            'gameResult' => $gameResult,
        ]);
    }
}
