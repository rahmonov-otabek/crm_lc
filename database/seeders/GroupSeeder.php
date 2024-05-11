<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;
use File;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get("database/data/groups.json");
        $groups = json_decode($json);
  
        foreach ($groups as $key => $value) {
            Group::create([
                "name" => $value->name,
                "image" => $value->image, 
                "course_id" => $value->course_id,
                "teacher_id" => $value->teacher_id,
                "room_id" => $value->room_id, 
                "start_time" => $value->start_time,
                "end_time" => $value->end_time,
                "start_date" => $value->start_date, 
                "end_date" => $value->end_date, 
            ]); 
        }
    }
}
