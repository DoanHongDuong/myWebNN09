<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhvienController
{
    public function index(){

        $sv = "Tôi là Dương";

        return view('SinhVien', compact('sv'));
    }
}
