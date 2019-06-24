<?php


namespace App\Http\Models;


class Player
{
    private $name;
    private $choice;

    public function __construct($name, $choice)
    {
        $this->name = $name;
        $this->choice = $choice;
    }

    public function name(){
        return $this->name;
    }

    public function choice(){
        return $this->choice;
    }

}
