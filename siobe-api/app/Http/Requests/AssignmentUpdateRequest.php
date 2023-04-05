<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignmentUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */

     public function rules(): array
     {
         $method = $this->method();
         if ($method == 'PATCH') {
             return [
                'assignment_plan_id' => ['required','integer'],
                'course_class_id' => ['required','integer'],
                'assigned_date' => ['required'],
                'due_date' => ['required'],
                'note' => ['required','string', 'max:255']
             ];
         } else {
             return [
                'assignment_plan_id' => ['required','integer'],
                'course_class_id' => ['required','integer'],
                'assigned_date' => ['required'],
                'due_date' => ['required'],
                'note' => ['required','string', 'max:255']
             ];
         }
     }
 }
 