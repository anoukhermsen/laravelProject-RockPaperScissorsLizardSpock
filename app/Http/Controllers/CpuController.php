<?php


namespace App\Http\Controllers;


class CpuController extends Controller
{
    const ROCK = 1;
    const PAPER = 2;
    const SCISSORS = 3;
    const LIZARD = 4;
    const SPOCK = 5;

    protected $cpu;

    public function __construct(string $cpu = 'CPU')
    {
        $this->cpu = $cpu;
    }

    public function showCpu()
    {
        $cpu = $this->cpu;

        return $cpu;
    }

    public function choices()
    {

        $choices = array(
            self::ROCK => array('scissors', 'lizard'),
            self::PAPER => array('rock', 'spock'),
            self::SCISSORS => array('paper', 'lizard'),
            self::LIZARD => array('spock', 'paper'),
            self::SPOCK => array('scissors', 'rock')
        );
        return $choices;
    }
}
