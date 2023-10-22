<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompteLiveStatistique>
 */
class CompteLiveStatistiqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "compte_id" => rand(1,30),
            "live_id" => rand(1,15),
            "statistique_id" => rand(1,250),
            //"ressource_id" => rand(1,4)
            //"dateRealisation" => fake()->date()
        ];
    }
}
