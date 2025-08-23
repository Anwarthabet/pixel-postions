<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name' => $this->faker->company(),
           'address' => $this->faker->address(),
           'website' => $this->faker->url(),
           'phone' => $this->faker->phoneNumber(), 
           'email' => $this->faker->unique()->companyEmail(),
            'user_id' => \App\Models\User::factory(),

            //
        ];
    }
}
