<?php
namespace App;

use App\Http\Controllers\FormController;
use App\Http\Controllers\CpuController;

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rock Paper Scissors Lizard Spock</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .content {
                font-size: 20px;
                margin-left: 10px;
            }

            .title {
                font-size: 50px;
                text-align: center;
            }

            select{
                font-size: 15px;
            }

            input[type="submit" i]{
                font-size: 15px;
            }

        </style>
    </head>
    <body>
        <div class="content">
            <div class="title">
                Rock Paper Scissors Lizard Spock
            </div>
            <div class="container">
                <div class="input-group">
                    <form action="#" method="get">
                        Name:
                        <input type="text" name="name">
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

                    <?php
                    // @todo: make view from it and remove php code
                        $var = new FormController();
                        $var->showPlayer();
//                        $var->name = request('name');
//                        $var->choice = request('choice');
                    ?>

                </div>
                <div class="float-right">
                        <?php
//                        $var = new CpuController();
//                        $var->showCpu();
//                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
