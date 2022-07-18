<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Petition>
 */
class PetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "full_name" => $this->faker->name(),
            "sur_name" => $this->faker->name(),
            "email" => $this->faker->email(),
            "country" => $this->faker->country(),
            "phone" => $this->faker->phoneNumber(),
            "need_campaign" => "1",
        ];
    }
}
