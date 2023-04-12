<?php
namespace App\Filters;

class CourseLearningOutcomeFilter extends ApiFilter{
    protected array $safeParams = [
        'id' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'position   ' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'ilo_id' => ['eq', 'gt', 'gte', 'lt', 'lte'], 
        'syllabus_id' => ['eq', 'gt', 'gte', 'lt', 'lte']
    ];

    protected array $actualDBColumns = [
        'id' => "id", 
    ];

    protected array $operators = [
        'eq' => '=',
        'gt' => '>',
        'gte' => '>=',
        'lt' => '<',
        'lte' => '<=',
    ]; 
}