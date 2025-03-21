<?php

require 'vendor/autoload.php';

use Martin\Task4\EmployeeOfficeProcessor;

$employees = [
    ['name' => 'John', 'city' => 'Dallas'],
    ['name' => 'Jane', 'city' => 'Austin'],
    ['name' => 'Jake', 'city' => 'Dallas'],
    ['name' => 'Jill', 'city' => 'Dallas'],
];

$offices = [
    ['office' => 'Dallas HQ', 'city' => 'Dallas'],
    ['office' => 'Dallas South', 'city' => 'Dallas'],
    ['office' => 'Austin Branch', 'city' => 'Austin'],
];

$processor = new EmployeeOfficeProcessor(collect($employees), collect($offices));
$output = $processor->generateOutput();
dd($output);
