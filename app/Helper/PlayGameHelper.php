<?php


namespace App\Helper;


class PlayGameHelper
{
    const ROCK = 1;
    const PAPER = 2;
    const SCISSORS = 3;
    const LIZARD = 4;
    const SPOCK = 5;

    private $cpuName;
    private $cpuChoice;
    private $playerName;
    private $playerChoice;

    /**
     * @return array
     */
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

    /**
     * @return string
     */
    public function playGame()
    {
        $cpuName = $this->getCpuName();
        $cpuChoice = $this->getCpuChoice();

        $playerName = $this->getPlayerName();
        $playerChoice = $this->getPlayerChoice();

        $choice = $this->choices();


        if ($playerChoice === $cpuChoice) {
            return("It's a tie!" . PHP_EOL);
        }

        //if $playerChoice === $choice['rock'] && wins from => array('scissors', 'lizard')
        if ($playerChoice == 'rock') {
            if (in_array($cpuChoice, $choice['rock'])=== true) {
                return($playerName . " wins!" . PHP_EOL);
            }
        }
        //if $playerChoice === $choice['paper'] && wins from => array('rock', 'spock')
        if ($playerChoice == 'paper') {
            if (in_array($cpuChoice, $choice['paper'])=== true) {
                return($playerName . " wins!" . PHP_EOL);
            }
        }
        //if $playerChoice === $choice['scissors'] && wins from => array('paper', 'lizard')
        if ($playerChoice == 'scissors') {
            if (in_array($cpuChoice, $choice['scissors'])=== true) {
                return($playerName . " wins!" . PHP_EOL);
            }
        }
        //if $playerChoice === $choice['lizard'] && wins from => array('spock', 'paper')
        if ($playerChoice == 'lizard') {
            if (in_array($cpuChoice, $choice['lizard'])=== true) {
                return($playerName . " wins!" . PHP_EOL);
            }
        }

        //if $playerChoice === $choice['spock'] && wins from => array('scissors', 'rock')
        if ($playerChoice === 'spock') {
            if (in_array($cpuChoice, $choice['spock'])=== true) {
                return($playerName . " wins!" . PHP_EOL);
            }
        }

        return($cpuName . " wins!" . PHP_EOL);
    }
}
