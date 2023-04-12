<?php
namespace App\Filters;

class SyllabusFilter extends ApiFilter{
    protected array $safeParams = [
        'title' => ['eq'],
        'id' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'author' => ['eq'],
        'head_of_study_program' => ["eq"]
    ];

    protected array $actualDBColumns = [
        'title' => "title",
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