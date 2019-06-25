<?php

namespace App\Service;

use App\Http\Controllers\CpuChoiceGenerator;
use App\Http\Models\GameResult;
use App\Http\Models\Player;

class PlayGameService
{
    /**
     * @var Player
     */
    private $cpuPlayer;

    /**
     * @var Player
     */
    private $realPlayer;

    /**
     * @param Player $cpuPlayer
     */
    public function setCpu(Player $cpuPlayer)
    {
        $this->cpuPlayer = $cpuPlayer;
    }

    /**
     * @param Player $realPlayer
     */
    public function setPlayer(Player $realPlayer)
    {
        $this->realPlayer = $realPlayer;
    }

    /**
     * @return GameResult
     * @throws \Exception
     * @todo step 2 use player objects as parameters
     */
    public function play()
    {

        if ($this->realPlayer->choice() === $this->cpuPlayer->choice()) {
            //return new GameResult($this->cpuName, $this->getCpuChoice(), $this->playerName, $this->playerChoice, true);
            return new GameResult($this->realPlayer, $this->cpuPlayer, true);
        }

        $choicesClass = new CpuChoiceGenerator();
        $choices = $choicesClass->choices();

        $winner = $this->cpuPlayer;

        // in array ['appel'] [['appel'], 'peer']
        if (!array_key_exists($this->realPlayer->choice(), $choices)) {
            throw new \Exception('Player choice is not a available choice');
        }

        if(in_array($this->cpuPlayer->choice(), $choices[$this->realPlayer->choice()]) === true) {
            $winner = $this->realPlayer->name();
        }

        return new GameResult($this->cpuPlayer, $this->realPlayer, false, $winner);
    }
}
