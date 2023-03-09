<?php

namespace App\Filters;

use Illuminate\Http\Request;

class UsersFilter extends ApiFilter
{
    protected array $safeParams = [
        'name' => ['eq'],
        'email' => ['eq'],
        'emailVerifiedAt' => ['eq'],
        'createdAt' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'updatedAt' => ['eq', 'gt', 'gte', 'lt', 'lte'],
    ];

    protected array $actualDBColumns = [
        'emailVerifiedAt' => 'email_verified_at',
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
