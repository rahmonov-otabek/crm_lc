<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;
use File;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get("database/data/departments.json");
        $departments = json_decode($json);
  
        foreach ($departments as $key => $value) {
            Department::create([
                "name" => $value->name 
            ]);
        }
    }
}
