<?php

namespace App\Filters;

use Illuminate\Http\Request;

class LearningPlanFilter extends ApiFilter
{
    protected array $safeParams = [
        'id' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        /*'week_number' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'llo_id' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'syllabus_id' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'createdAt' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'updatedAt' => ['eq', 'gt', 'gte', 'lt', 'lte']*/
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
