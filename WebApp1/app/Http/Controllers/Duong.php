<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Duong extends Controller
{
    public function test()
    {
        $duong = "Duong";
        echo $duong . "<br>";

        $age = 19;
        if ($age > 18) {    
            echo "Du tuoi bau cu<br>";
        } else {
            echo "Khong du tuoi<br>";
        }

        $a = 5;
        $b = 10;
        $sum = $a + $b;
        echo "sum = $sum<br>";
        }
}
