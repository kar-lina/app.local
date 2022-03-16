<?php

namespace Database\Factories\Models;

use App\Models\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'position_id' => rand(1, 5),
            'salary' => random_int(5000, 500000),
            'chief_id' => random_int(1, 500000),
            'employment_date' => $this->faker->dateTimeBetween('-2 months', '-1 days'),
        ];
    }
}
