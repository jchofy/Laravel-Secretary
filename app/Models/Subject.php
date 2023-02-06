<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ["name", "weekly_hours", "total_hours"];
    protected $primaryKey = 'id';
}
