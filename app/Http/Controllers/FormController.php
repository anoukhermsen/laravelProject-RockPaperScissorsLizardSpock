<?php


namespace App\Http\Controllers;


class FormController extends Controller
{
    public function showPlayer()
    {

        if(isset($_GET['submit']))
        {
            if(!empty($_GET["name"] && $_GET["choice"]))
            {
                echo "Welcome: ". $_GET["name"]. "<br />";
                echo "Your choice is: ". $_GET["choice"]. "<br />";
            }
            else{
                echo 'je hebt je naam niet ingevuld';
            }
        }

    }
}
