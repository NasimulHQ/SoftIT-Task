<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $employeeTitle = $this->faker->words(10);
        return [

            'employee_id'=> $employeeTitle,
            'employee_name' => $employeeTitle,
        ];
    }
}
