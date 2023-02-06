<?php

namespace Database\Seeders;

use App\Models\Enrollment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnrollmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Enrollment::truncate();
        DB::table("enrollments")->insert([
            "student_id" => 1,
            "subject_id" => 1,
            "note" => 8,
            "evaluation_date" => "2023-02-03"
        ]);

        DB::table("enrollments")->insert([
            "student_id" => 2,
            "subject_id" => 3,
            "note" => 9,
            "evaluation_date" => "2023-02-03"
        ]);

        DB::table("enrollments")->insert([
            "student_id" => 3,
            "subject_id" => 2,
            "note" => 7,
            "evaluation_date" => "2023-02-03"
        ]);
    }
}
