<?php

namespace App\Http\Controllers;

class CpuChoiceGenerator
{
    const ROCK = 'rock';
    const PAPER = 'paper';
    const SCISSORS = 'scissors';
    const LIZARD = 'lizard';
    const SPOCK = 'spock';

    public function choices()
    {
        $choices = array(
            self::ROCK => array(self::SCISSORS, self::LIZARD),
            self::PAPER => array(self::ROCK, self::SPOCK),
            self::SCISSORS => array(self::PAPER, self::LIZARD),
            self::LIZARD => array(self::SPOCK, self::PAPER),
            self::SPOCK => array(self::SCISSORS, self::ROCK)
        );
        return $choices;
    }

    public function generate()
    {
        return $randIndex = array_rand($this->choices());
    }
}
