<?php


namespace App\Http\Models;


class GameResult
{
    private $cpuPlayer;
    private $realPlayer;
    private $isDraw;
    private $winner;

    public function __construct($cpuPlayer, $realPlayer, $isDraw, $winner = null)
    {
        $this->cpuPlayer = $cpuPlayer;
        $this->realPlayer = $realPlayer;
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

