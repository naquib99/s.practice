<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\evaluator>
 */
class EvaluatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'evaluator_id' => \App\Models\User::factory(),
            'evaluator_name' => $this->faker->name(),
            'evaluator_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'evaluator_email' => $this->faker->unique()->safeEmail()
        ];
    }
}
