<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateCourseRequest;
use App\Http\Resources\CourseResource;
use App\Models\Course;

class CourseController extends Controller
{
    //
    public function index(){
        return Course::all();
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(request $request){
        $courses = new Course;
        $courses->study_program_id = $request->study_program_id;
        $courses->creator_user_id = $request->creator_user_id;
        $courses->name = $request->name;
        $courses->code = $request->code;
        $courses->course_credit = $request->course_credit;
        $courses->lab_credit = $request->lab_credit;
        $courses->type = $request->type;
        $courses->short_description = $request->short_description;
        $courses->minimal_requirement = $request->minimal_requirement;
        $courses->study_material_summary = $request->study_material_summary;
        $courses->learning_media = $request->learning_media;
        $courses->save();

        return "Success";
    }

      public function edit($name){
          $courses = Course::find($name);

          return view('courses.edit', [
            'name' => $name,
          ]);
      }

    public function update(request $request, $id){
        $study_program_id = $request->study_program_id;
        $creator_user_id = $request->creator_user_id;
        $name = $request->name;
        $code = $request->code;
        $course_credit = $request->course_credit;
        $lab_credit = $request->lab_credit;
        $type = $request->type;
        $short_description = $request->short_description;
        $minimal_requirement = $request->minimal_requirement;
        $study_material_summary = $request->study_material_summary;
        $learning_media = $request->learning_media;


        $courses = Course::find($id);
        $courses->study_program_id = $study_program_id;
        $courses->creator_user_id = $creator_user_id;
        $courses->name = $name;
        $courses->code = $code;
        $courses->course_credit = $course_credit;
        $courses->lab_credit = $lab_credit;
        $courses->type = $type;
        $courses->short_description = $short_description;
        $courses->minimal_requirement = $minimal_requirement;
        $courses->study_material_summary = $study_material_summary;
        $courses->learning_media = $learning_media;
        $courses->save();

        return "Success";
    }

    public function destroy($courses){
        $courses = Course::find($courses);
        $courses->delete();

        return "Success";
    }
}
