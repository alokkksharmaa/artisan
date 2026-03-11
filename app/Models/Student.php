<?php

namespace App\Models;

class Student
{
    public string $name;
    public int $age;
    public string $course;
    public float $gpa;

    public function __construct($name, $age, $course, $gpa)
    {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
        $this->gpa = $gpa;
    }
}
