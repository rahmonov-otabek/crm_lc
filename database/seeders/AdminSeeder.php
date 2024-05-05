<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use File;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  
        $json = File::get("database/data/admins.json");
        $admins = json_decode($json);
  
        foreach ($admins as $key => $value) {
            Admin::create([
                "name" => $value->name,
                "profile_pic" => $value->profile_pic,
                "phone_number" => $value->phone_number,
                "password" => bcrypt($value->password)
            ]);
        }
    } 
}
