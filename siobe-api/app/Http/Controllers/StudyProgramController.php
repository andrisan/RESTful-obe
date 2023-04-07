<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateStudyProgramRequest;
use App\Http\Resources\StudyProgramResource;
use App\Models\StudyProgram;


class StudyProgramController extends Controller
{
    //
    public function index(){
        return StudyProgram::all();
    }

    public function store(request $request){
        $study_programs = new StudyProgram;
        $study_programs->department_id = $request->department_id;
        $study_programs->name = $request->name;
        $study_programs->save();

        return "Success";
    }

    public function update(request $request, $study_programs){
        $name = $request->name;
        $department_id = $request->department_id;

        $study_programs = StudyProgram::find($study_programs);
        $study_programs->name = $name;
        $study_programs->department_id = $department_id;
        $study_programs->save();

        return "Success";
    }

    public function destroy($study_programs){
        $study_programs = StudyProgram::find($study_programs);
        $study_programs->delete();

        return "Success";
    }   
}
