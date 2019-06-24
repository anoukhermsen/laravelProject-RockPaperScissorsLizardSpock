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

    public function __construct(CpuChoiceGenerator $cpuChoiceGenerator, PlayGameService $playGameService, Player $player)
    {
        $this->cpuChoiceGenerator = $cpuChoiceGenerator;
        $this->playGameService = $playGameService;
        $this->player = $player;
    }

    public function showWelcomePage()
    {
        return view('welcome');
    }

    /**
     * @return mixed
     */
    public function getCpuChoice()
    {
        if(empty($player)) {
            $this->player['choice'] = $this->cpuChoiceGenerator->generate();
        }
        return $this->player['name'];
    }

    /**
     * @todo rename
     * @todo describe functionality
     * @throws \Exception
     */
    public function getPlayersInformation()
    {
        new Player('cpu1', $this->getCpuChoice());
        //$this->playGameService->setCpu('cpu1', $this->playGameService->getCpuChoice());
        new Player(request('name'), request('choice'));
        //$this->playGameService->setPlayer(request('name'), request('choice'));
        $gameResult = $this->playGameService->play();

        return view('welcome', [
            'showOutcome' => true,
            'userInput' => [
                'name' => request('name'),
                'choice' => request('choice')
            ],
            'cpuInput' => [
                'name' => 'cpu1',
                'choice' => $this->getCpuChoice()
            ],
            'gameResult' => $gameResult,
        ]);
    }
}
