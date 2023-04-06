<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;


class Course extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'study_program_id','creator_user_id','name','code','course_credit','lab_credit',
        'type','short_description','minimal_requirement','study_material_summary','learning_media'
    ];


    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class, 'study_program_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_user_id');
    }

    public function courseClasses(){
        return $this->hasMany(CourseClass::class);
    }
}
