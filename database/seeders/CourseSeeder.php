<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use File;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get("database/data/courses.json");
        $courses = json_decode($json);
  
        foreach ($courses as $key => $value) {
            Course::create([
                "name" => $value->name,
                "salary" => $value->salary,
                "department_id" => $value->department_id 
            ]);
        }
    }
}
