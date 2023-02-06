<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $studentList = Student::all();
        return view('students.all',['studentList'=>$studentList]);
    }

    public function create()
    {
        
    }

    public function store(Request $r)
    {
        $s = new Student($r->all());
        $s->save();
        return redirect()->route('student.index');
    }

    public function show($id)
    {
        $student = Student::find($id);
        $data['student'] = $student;
        return view('students.show', ['data'=>$data]);
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
        
    }
}
