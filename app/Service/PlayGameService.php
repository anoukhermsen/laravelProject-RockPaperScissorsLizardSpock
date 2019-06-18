<?php

namespace App\Service;

use App\Http\Controllers\CpuChoiceGenerator;
use App\Http\Models\GameResult;

class PlayGameService extends CpuChoiceGenerator
{
    private $cpuName;
    private $cpuChoice;
    private $playerName;
    private $playerChoice;

    /**
     * @var CpuChoiceGenerator
     */
    private $CpuChoiceGenerator;

    public function __construct($cpuName, GameResult $cpuChoice)
    {
        $this->cpuName = $cpuName;
        $this->setCpu($cpuChoice);

        //$this->CpuChoiceGenerator = $CpuChoiceGeneratorController;
    }

    /**
     * @param $cpuChoice
     */
    public function setCpu($cpuChoice)
    {
        //$this->cpuName;
        $this->cpuChoice = $cpuChoice;
    }

    /**
     * @param $playerName
     * @param $playerChoice
     */
    public function setPlayer($playerName, $playerChoice)
    {
        $this->playerName = $playerName;
        $this->playerChoice = $playerChoice;
    }


    /**
     * @return mixed
     */
    public function getCpuName()
    {
        return $this->cpuName;
    }

    /**
     * @return mixed
     */
    public function getCpuChoice()
    {
        return $this->cpuChoice;
    }

    /**
     * @return mixed
     */
    public function getPlayerName()
    {
        return $this->playerName;
    }

    /**
     * @return mixed
     */
    public function getPlayerChoice()
    {
        return $this->playerChoice;
    }

    public function play()
    {
        //$cpuName = $this->cpuName;
        //$PlayGame = new PlayGameService($cpuName, new GameResult($cpuChoice));
    }
}
