<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StudyProgram;

class StudyProgram extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name', 'department_id'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

}
