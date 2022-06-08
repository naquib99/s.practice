<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\managePsm>
 */
class ManagePsmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'evaluator_id' => \App\Models\evaluator::factory(),
            'allocate' => 'Allocated',
            'std_id1' => \App\Models\student::factory(),
            
        ];
    }
}
