<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert single record
        // Student::create([
        //     'name'  => 'Raj',
        //     'email' => 'abc@gmail.com',
        //     'age'   => 28,
        // ]);

        $json = File::get('database/json/student.json');
        $students=collect(json_decode($json));

        $students->each(function($student){
            Student::create([
                'name'=> $student->name,
                'email'=>$student->email,
                'age'=>$student->age
            ]);
        });
    }
}