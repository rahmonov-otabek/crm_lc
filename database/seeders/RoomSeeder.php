<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;
use File;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get("database/data/rooms.json");
        $rooms = json_decode($json);
  
        foreach ($rooms as $key => $value) {
            Room::create([ 
                "name" => $value->name 
            ]);
        }
    }
}
