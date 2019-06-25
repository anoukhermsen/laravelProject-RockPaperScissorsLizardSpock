<?php


namespace App\Http\Controllers;

use App\Http\Models\Player;
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

    /**
     * @var Player
     */
    private $player;

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

        $cpuChoice = $this->cpuChoiceGenerator->generate();
        
        $cpuPlayer = new Player('cpu1', $cpuChoice);
        $this->playGameService->setCpu($cpuPlayer);

        $realPlayer = new Player(request('name'), request('choice'));
        $this->playGameService->setPlayer($realPlayer);

        $gameResult = $this->playGameService->play();

        return view('welcome', [
            'showOutcome' => true,
            'userInput' => [
                'name' => request('name'),
                'choice' => request('choice')
            ],
            'cpuInput' => [
                'name' => 'cpu1',
                'choice' => $cpuChoice
            ],
            'gameResult' => $gameResult,
        ]);
    }
}
