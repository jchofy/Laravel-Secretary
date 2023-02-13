<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class EnrollmentController extends Controller
{
    public function edit()
    {
        $id_student = request("student_id");
        $id_subject = request("subject_id");
        $enrollment = DB::table('enrollments')->where('student_id', $id_student)->where('subject_id',$id_subject)->get();
        return view('enrollments.form', array('enrollment' => $enrollment));
    }

    public function update(Request $r)
    {
        $fecha = date("y-m-d");

        $id_student = $r->input("student_id");
        $id_subject = $r->input("subject_id");

        DB::table('enrollments')
            ->where('student_id', $id_student)
            ->where('subject_id',$id_subject)
            ->update(['note' => $r->input("note")],
                      ['evaluation_date' => $fecha]);

        return redirect()->route('student.show', $id_student);
    }
}
