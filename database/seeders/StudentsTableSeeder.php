<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("students")->insert([
            "name" => "Alex",
            "surname" => "Ghenovici",
            "sex" => "Men",
            "age" => 20
        ]);

        DB::table("students")->insert([
            "name" => "Raúl",
            "surname" => "Medina",
            "sex" => "Men",
            "age" => 19
        ]);

        DB::table("students")->insert([
            "name" => "Juan",
            "surname" => "Delgado",
            "sex" => "Men",
            "age" => 24
        ]);

        DB::table("students")->insert([
            "name" => "Laura",
            "surname" => "Cabezas",
            "sex" => "Women",
            "age" => 23
        ]);
    }
}
