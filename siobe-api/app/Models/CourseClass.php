<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourseClass;


class CourseClass extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'course_id','name','thumnbnail_img',
        'class_code','creator_user_id','syllabus_id'
    ];

    protected $casts = [
        'settings' => 'object',
    ];

    public function students()
    {
        return $this->belongsToMany(User::class, 'join_classes',
            'course_class_id', 'student_user_id');
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class, 'course_class_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_user_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function syllabus()
    {
        return $this->belongsTo(Syllabus::class);
    }
}
