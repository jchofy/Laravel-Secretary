<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjectList = Subject::all();
        return view('subjects.all',['subjectList'=>$subjectList]);
    }

    public function create()
    {
        
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
        return view('subjects.show', ['data'=>$data]);
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
        
    }
}
