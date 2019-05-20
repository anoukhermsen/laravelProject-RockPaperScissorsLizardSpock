<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CpuChoiceGeneratorController extends Controller
{
    private function choices() : array
    {
        $choices = array(
            'rock' => array('scissors', 'lizard'),
            'paper' => array('rock', 'spock'),
            'scissors' => array('paper', 'lizard'),
            'lizard' => array('spock', 'paper'),
            'spock' => array('scissors', 'rock')
        );
        return $choices;
    }

    public function generate()
    {
        return $randIndex = array_rand($this->choices());
    }
}
