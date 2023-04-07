<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinClass extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'course_class_id','student_user_id'
    ];

    public function courseClass()
    {
        return $this->hasMany(CourseClass::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}


