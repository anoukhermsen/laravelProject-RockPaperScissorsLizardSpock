<?php

namespace App\Service;

use App\Http\Controllers\CpuChoiceGenerator;
use App\Http\Models\GameResult;

class PlayGameService
{
    // @todo Step 1 use a player value object
    private $cpuName;
    private $cpuChoice;

    // @todo Step 1 use a player value object
    private $playerName;
    private $playerChoice;

    /** @var CpuChoiceGenerator */
    private $cpuChoiceGenerator;

    /**
     * @param $cpuName
     * @param $cpuChoice
     */
    public function setCpu($cpuName, $cpuChoice)
    {
        $this->cpuName = $cpuName;
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
    public function getCpuChoice()
    {
        if(empty($this->cpuChoice)) {
            $this->cpuChoice = $this->getCpuChoiceGenerator()->generate();
        }
        return $this->cpuChoice;
    }

    /**
     * @return CpuChoiceGenerator
     */
    private function getCpuChoiceGenerator()
    {
        if(empty($this->cpuChoice)) {
            $this->cpuChoiceGenerator = new CpuChoiceGenerator();
        }
        return $this->cpuChoiceGenerator;
    }

    /**
     * @return GameResult
     * @throws \Exception
     * @todo step 2 use player objects as parameters
     */
    public function play()
    {
        if ($this->playerChoice === $this->getCpuChoice()) {
            return new GameResult($this->cpuName, $this->getCpuChoice(), $this->playerName, $this->playerChoice, true);
        }

        $choicesClass = new CpuChoiceGenerator();
        $choices = $choicesClass->choices();

        $winner = $this->cpuName;

        // in array ['appel'] [['appel'], 'peer']
        if (!array_key_exists($this->playerChoice, $choices)) {
            throw new \Exception('Player choice is not a available choice');
        }

        if(in_array($this->cpuChoice, $choices[$this->playerChoice]) === true) {
            $winner = $this->playerName;
        }

        return new GameResult($this->cpuName, $this->cpuChoice, $this->playerName, $this->playerChoice, false, $winner);
    }
}
