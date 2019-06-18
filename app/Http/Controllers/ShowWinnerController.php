<?php


namespace App\Http\Controllers;


use App\Service\PlayGameService;

class ShowWinnerController extends PlayGameService
{
    public function playGame()
    {
        $cpuName = $this->getCpuName();
        $cpuChoice = $this->getCpuChoice();
        $playerName = $this->getPlayerName();
        $playerChoice = $this->getPlayerChoice();

        $choice = $this->choices();

        var_dump($playerChoice . $cpuChoice);

        //return view('welcome', function () {
            if ($playerChoice === $cpuChoice) {
                return ("It's a tie!" . PHP_EOL);
            }

            //if $playerChoice === $choice['rock'] && wins from => array('scissors', 'lizard')
            if ($playerChoice == 'rock') {
                if (in_array($cpuChoice, $choice['rock']) === true) {
                    return ($playerName . " wins!" . PHP_EOL);
                }
            }
            //if $playerChoice === $choice['paper'] && wins from => array('rock', 'spock')
            if ($playerChoice == 'paper') {
                if (in_array($cpuChoice, $choice['paper']) === true) {
                    return ($playerName . " wins!" . PHP_EOL);
                }
            }
            //if $playerChoice === $choice['scissors'] && wins from => array('paper', 'lizard')
            if ($playerChoice == 'scissors') {
                if (in_array($cpuChoice, $choice['scissors']) === true) {
                    return ($playerName . " wins!" . PHP_EOL);
                }
            }
            //if $playerChoice === $choice['lizard'] && wins from => array('spock', 'paper')
            if ($playerChoice == 'lizard') {
                if (in_array($cpuChoice, $choice['lizard']) === true) {
                    return ($playerName . " wins!" . PHP_EOL);
                }
            }

            //if $playerChoice === $choice['spock'] && wins from => array('scissors', 'rock')
            if ($playerChoice === 'spock') {
                if (in_array($cpuChoice, $choice['spock']) === true) {
                    return ($playerName . " wins!" . PHP_EOL);
                }
            }

            return ($cpuName . " wins!" . PHP_EOL);
        //}
        //]);
    }
}
