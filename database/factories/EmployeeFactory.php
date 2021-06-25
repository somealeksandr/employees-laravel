<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'department_id' => rand(1, 5),
            'name' => $this->faker->name,
            'date_birth' => $this->faker->date('Y-m-d'),
            'position' => $this->faker->jobTitle,
            'type' => 'hourly payment',
            'monthly_payment' => rand(500, 3000),
        ];
    }
}
