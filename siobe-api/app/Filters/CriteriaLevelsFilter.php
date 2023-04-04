<?php

namespace App\Filters;

class CriteriaLevelsFilters extends ApiFilter
{
    protected array $safeParams = [
        'title' => ['eq'],
        'id' => ['eq', 'gt', 'gte', 'lt', 'lte']
    ];

    protected array $actualDBColumns = [
        'title' => "title",
        'id' => "id"
    ];

    protected array $operators = [
        'eq' => '=',
        'gt' => '>',
        'gte' => '>=',
        'lt' => '<',
        'lte' => '<=',
    ]; 
}
