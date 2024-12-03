<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => "https://picsum.photos/800/600?random=". $this->faker->numberBetween(1000,3000),
            'description' =>$this->faker->text(),
            'tag' =>$this->faker->sentence(),
            'title' =>$this->faker->sentence(),
            'content' =>$this->faker->text(),
            'user_id' => User::all()->random()->id,
        ];
    }
}