<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([ 
            AdminSeeder::class,
            DepartmentSeeder::class,
            RoomSeeder::class,
            CourseSeeder::class, 
            TeacherSeeder::class,
            WeekDaySeeder::class,
            GroupSeeder::class,
            StudentSeeder::class,  
            ]); 
    }
}
