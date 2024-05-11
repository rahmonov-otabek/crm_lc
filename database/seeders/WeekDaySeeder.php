<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WeekDay;
use File;

class WeekDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get("database/data/week_days.json");
        $week_days = json_decode($json);
  
        foreach ($week_days as $key => $value) {
            WeekDay::create([ 
                "name" => $value->name 
            ]);
        }
    }
}
