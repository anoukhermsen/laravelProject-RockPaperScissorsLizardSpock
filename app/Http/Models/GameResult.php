<?php


namespace App\Http\Models;


class GameResult
{
    public $cpuChoice;
    public $playerChoice;

    public function __construct($cpuChoice, $playerChoice)
    {
        $this->cpuChoice = $cpuChoice;
        $this->playerChoice = $playerChoice;
    }

    public function isDraw()
    {
        $cpuChoice = $this->cpuChoice;
        $playerChoice = $this->playerChoice;
        if($cpuChoice === $playerChoice){
            echo "It's a draw" . $cpuChoice . $playerChoice;
        }
    }
}
