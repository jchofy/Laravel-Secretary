<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function index()
    {
        $subjectList = Subject::all();
        return view('subjects.all',['subjectList'=>$subjectList]);
    }

    public function create()
    {
        
        return view('subjects.create');
    }

    public function store(Request $r)
    {
        $s = new Subject($r->all());
        $s->save();
        return redirect()->route('subject.index');
    }

    public function show($id)
    {
        $subject = Subject::find($id);
        $data['subject'] = $subject;
        $subjectsEnrollments = DB::table('enrollments')
            ->join('subjects', 'enrollments.subject_id', '=', 'subjects.id')
            ->join('students','enrollments.student_id', '=', 'students.id')
            ->select('students.name','students.surname', 'students.sex', 'students.age')
            ->where('enrollments.subject_id','=',$id)
            ->get();
        return view('subjects.show', ['data'=>$data, 'students'=>$subjectsEnrollments]);
    }

    public function edit($id)
    {
        $subject = Subject::find($id);
        return view('subjects.form', array('subject' => $subject));
    }

    public function update(Request $r, $id)
    {
        $s = Subject::find($id);
        $s->name = $r->name;
        $s->weekly_hours = $r->weekly_hours;
        $s->total_hours = $r->total_hours;
        $s->save();
        return redirect()->route('subject.index');
    }

    public function destroy($id)
    {
        $s = Subject::find($id);
        $s->delete();
        return redirect()->route('subject.index');
    }
}
