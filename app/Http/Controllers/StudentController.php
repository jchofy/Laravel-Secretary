<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $studentList = Student::all();
        return view('students.all',['studentList'=>$studentList]);
    }

    public function create()
    {
        $subjects = Subject::all();
        return view('students.create',['subjects'=>$subjects]);
    }

    public function store(Request $r)
    {
        $subjects = $r->input('asignaturas');

        $name = $r->input('name');    
        
        $s = new Student($r->all());
        $s->save();

        $student_id = DB::table('students')->where('name', $name)->value('id');

        foreach($subjects as $subject){
          
            DB::table('enrollments')->insert(
                array(
                       'student_id' => $student_id, 
                       'subject_id' => $subject,
                       'note' => null,
                       'evaluation_date' => null
                )
           );
        }

        return redirect()->route('student.index');
    }

    public function show($id)
    {
        $student = Student::find($id);
        $data['student'] = $student;
        $studentEnrollments = DB::table('enrollments')
            ->join('subjects', 'enrollments.subject_id', '=', 'subjects.id')
            ->join('students','enrollments.student_id', '=', 'students.id')
            ->select('subjects.name','enrollments.note','enrollments.evaluation_date')
            ->where('enrollments.student_id','=',$id)
            ->get();
        return view('students.show', ['data'=>$data,'subjects'=>$studentEnrollments]);
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.form', array('student' => $student));
    }

    public function update(Request $r, $id)
    {
        $s = Student::find($id);
        $s->name = $r->name;
        $s->surname = $r->surname;
        $s->sex = $r->sex;
        $s->age = $r->age;
        $s->save();
        return redirect()->route('student.index');
    }

    public function destroy($id)
    {
        $s = Student::find($id);
        $s->delete();
        return redirect()->route('student.index');
    }
}
