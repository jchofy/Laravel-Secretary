<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ["name", "surname", "sex", "age"];
    protected $primaryKey = 'id';

    public function subjects(){
        return $this->belongsToMany('App\Models\Subject','enrollments', 'subject_id', 'student_id');
    }
}
