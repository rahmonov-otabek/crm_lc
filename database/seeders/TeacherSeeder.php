<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
use File;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  
        $json = File::get("database/data/teachers.json");
        $teachers = json_decode($json);
  
        foreach ($teachers as $key => $value) {
            Teacher::create([
                "name" => $value->name,
                "profile_pic" => $value->profile_pic,
                "phone_number" => $value->phone_number, 
                "salary" => $value->salary,
                "birthday" => $value->birthday,
                "gender" => $value->gender,
                "password" => bcrypt($value->password)
            ]);
        }
    } 
}
