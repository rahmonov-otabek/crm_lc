<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  
        $json = File::get("database/data/students.json");
        $students = json_decode($json);
  
        foreach ($students as $key => $value) {
            Student::create([
                "name" => $value->name,
                "profile_pic" => $value->profile_pic,
                "phone_number" => $value->phone_number,
                "address" => $value->address,
                "cash" => $value->cash,
                "birthday" => $value->birthday,
                "gender" => $value->gender,
                "password" => bcrypt($value->password)
            ]);
        } 
    } 
}
