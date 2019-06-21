<?php


namespace App\Http\Models;


class GameResult
{
    private $cpuName;
    private $cpuChoice;
    private $playerName;
    private $playerChoice;
    private $isDraw;
    private $winner;

    public function __construct($cpuName, $cpuChoice, $playerName, $playerChoice, $isDraw, $winner = null)
    {
        $this->cpuName = $cpuName;
        $this->cpuChoice = $cpuChoice;
        $this->playerName = $playerName;
        $this->playerChoice = $playerChoice;
        $this->isDraw = $isDraw;
        $this->winner = $winner;

    }

    public function isDraw()
    {
        return $this->isDraw;
    }

    public function winner()
    {
        return $this->winner;
    }
}
