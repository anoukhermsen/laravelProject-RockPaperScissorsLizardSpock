<?php


namespace App\Http\Controllers;

class FormController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function getFormPlayer()
    {
        $CpuChoiceGenerator = new CpuChoiceGeneratorController();
        return view('welcome', [
            'userInput' => [
                'name' => request('name'),
                'choice' => request('choice')
            ],
            'cpuInput' => [
                'name' => 'cpu1',
                'choice' => $CpuChoiceGenerator->generate()
            ]]);
    }
}
