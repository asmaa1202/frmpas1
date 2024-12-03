<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adhesion>
 */
class AdhesionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->name(),
            'ville'=>$this->faker->name(),
            'telephone'=>$this->faker->phoneNumber(),
            'CIN'=>$this->faker->numberBetween(100000, 999999),
            'carte_sejour'=>$this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'created_at' => now(),
        ];
    }
}
