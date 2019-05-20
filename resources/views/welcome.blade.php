<?php

namespace App;

?>
@extends('content')
@section('form')
    <div class="content">
        <div class="title">
            Rock Paper Scissors Lizard Spock
        </div>
        <div class="container">
            <div class="input-group">
                <form action="" method="post">
                    @csrf
                    Name:
                    <input type="text" name="name" required>
                    <br>
                    Choice:
                    <select name="choice">
                        <option value="rock">Rock</option>
                        <option value="paper">Paper</option>
                        <option value="scissors">Scissors</option>
                        <option value="lizard">Lizard</option>
                        <option value="spock">Spock</option>
                    </select>
                    <br><br>
                    <input type="submit" name="submit" value="Submit">
                </form>
                <div>
                    <p>
                        @isset($userInput)
                            My name is {{$userInput['name']}}
                            & my choice is {{$userInput['choice']}}
                        @endisset
                    </p>
                    <p>
                        @isset($cpuInput)
                            My name is {{$cpuInput['name']}}
                            & my choice is {{$cpuInput['choice']}}
                        @endisset
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
