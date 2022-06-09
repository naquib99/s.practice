<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_id' => \App\Models\User::factory(),
            'student_name' => $this->faker->name(),
            'student_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'student_email' => $this->faker->unique()->safeEmail(),

            'evaluator_id' => \App\Models\evaluator::factory(),
            'supervisor_id' => \App\Models\supervisor::factory(),
        ];
    }
}
