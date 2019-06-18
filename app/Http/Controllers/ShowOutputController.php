<?php


namespace App\Http\Controllers;

use App\Service\PlayGameService;

class ShowOutputController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function getPlayersInformation()
    {
        $CpuChoiceGenerator = new CpuChoiceGenerator();
        $playerGameHelper = new PlayGameService();
        $playerGameHelper->setCpu('cpu1', $CpuChoiceGenerator->generate());
        $playerGameHelper->setPlayer(request('name'), request('choice'));

        return view('welcome', [
            'userInput' => [
                'name' => request('name'),
                'choice' => request('choice')
            ],
            'cpuInput' => [
                'name' => 'cpu1',
                'choice' => $CpuChoiceGenerator->generate()
            ]
        ]);
    }
}
