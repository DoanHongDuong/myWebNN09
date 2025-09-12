<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    Student::create([
    'studentID' => 's01',
    'studentName' => 'Duong',
    'studentClass' => 'CNTT5',
    ]);
    }
}
