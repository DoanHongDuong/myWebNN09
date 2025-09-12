<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  

class TestController extends Controller 
{
    public function index()
    {
        $duong = "Duong hehe";  
        $test = true;            

        echo $duong;             

        $tuoi = 20;              

        if ($tuoi > 18) {
            echo "Du dieu kien bau cu";  
        } else {
            echo "Chua du dieu kien bau cu";  
        }
    }
}

