<?php

?>
/*

namespace App\Filters; 

use Illuminate\Http\Request;

class UsersFilter extends ApiFilter
{
    protected array $safeParams = [
        'assignment_plan_id' => ['eq'],
        'course_class_id' => ['eq'],
    ];

    protected array $actualDBColumns = [
        'assigned_date' => '$this->assigned_date',
		'due_date' => '$this->due_date',
    ];

    protected array $operators = [
        'eq' => '=',
        'gt' => '>',
        'gte' => '>=',
        'lt' => '<',
        'lte' => '<=',
    ];
} 
