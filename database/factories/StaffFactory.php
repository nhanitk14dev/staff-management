<?php

namespace Database\Factories;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    protected $model = Staff::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'staff_id' => fake()->regexify('[A-Z]{5}[0-4]{3}'),
            'full_name' => fake()->name(),
            'birth_date' => fake()->date(),
            'gender' => fake()->numberBetween(1,2)
        ];
    }
}
