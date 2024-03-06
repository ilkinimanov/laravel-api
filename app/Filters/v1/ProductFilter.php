<?php

namespace App\Filters\v1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;


class ProductFilter extends ApiFilter {
    protected $safeParams = [
        'id' => ['eq'],
        'title' => ['eq'],
        'description' => ['eq'],
        'price' => ['eq'],
    ];


    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];
}
