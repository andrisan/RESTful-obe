<?php

namespace App\Filters;

use Illuminate\Http\Request;

class FacultyFilter extends ApiFilter
{
    protected array $safeParams = [
        'name' => ['eq'],
    ];

    protected array $actualDBColumns = [
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
    ];

    protected array $operators = [
        'eq' => '=',
        'gt' => '>',
        'gte' => '>=',
        'lt' => '<',
        'lte' => '<=',
    ];
}