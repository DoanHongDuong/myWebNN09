<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVieController extends Controller
{
    public function hienthiSinhVien()
    {
        $diachi = "Dai Hoc Phenikaa";

        return view('SinhVien', compact('diachi'));
    }
}
