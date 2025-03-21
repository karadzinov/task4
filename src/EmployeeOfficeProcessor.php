<?php

namespace Martin\Task4;

use Illuminate\Support\Collection;

class EmployeeOfficeProcessor
{
    protected Collection $employees;
    protected Collection $offices;

    public function __construct(Collection $employees, Collection $offices)
    {
        $this->employees = $employees;
        $this->offices = $offices;
    }
    public function generateOutput()
    {
        return $this->offices->groupBy('city')->mapWithKeys(function ($offices, $city) {
            $cityEmployees = $this->employees->where('city', $city)->pluck('name')->all();

            return [
                $city => $offices->mapWithKeys(fn($office) => [$office['office'] => $cityEmployees])->all()
            ];
        });
    }
}
