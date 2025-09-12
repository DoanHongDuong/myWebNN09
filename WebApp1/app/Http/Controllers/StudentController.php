<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController 
{
    public function readStudent()
    {
        $student = Student::All();
        return view('Student', compact('student'));
    }
}
