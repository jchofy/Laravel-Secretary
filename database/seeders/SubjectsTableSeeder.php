<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("subjects")->insert([
            "name" => "DIW",
            "weekly_hours" => 6,
            "total_hours" => 300
        ]);

        DB::table("subjects")->insert([
            "name" => "DAWEB",
            "weekly_hours" => 3,
            "total_hours" => 150
        ]);

        DB::table("subjects")->insert([
            "name" => "DWES",
            "weekly_hours" => 8,
            "total_hours" => 400
        ]);

        DB::table("subjects")->insert([
            "name" => "DWEC",
            "weekly_hours" => 9,
            "total_hours" => 450
        ]);

        DB::table("subjects")->insert([
            "name" => "EIE",
            "weekly_hours" => 4,
            "total_hours" => 200
        ]);
    }
}
