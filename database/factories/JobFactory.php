<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(),
            'location' => $this->faker->city(),
            'salary' => $this->faker->numberBetween(30000, 150000),
            'employer_id' => \App\Models\Employer::factory(),
            'schedule' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract', 'Internship']),
            'url' => $this->faker->url(),
            'featured' => $this->faker->boolean(20), // 20% chance of being featured

    
            //
        ];
    }
}
