<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter
{
    protected array $safeParams = [];

    protected array $actualDBColumns = [];

    protected array $operators = [];

    public function filter(Request $request): array
    {
        $queryArray = [];
        foreach ($this->safeParams as $param => $operators) {
            $query = $request->query($param);
            if (!isset($query)) {
                continue;
            }

            $column = $this->actualDBColumns[$param] ?? $param;
            foreach ($operators as $operator) {
                if (!isset($query[$operator])) {
                    continue;
                }

                $value = $query[$operator];
                $queryArray[] = [$column, $this->operators[$operator], $value];
            }
        }
        return $queryArray;
    }
}
