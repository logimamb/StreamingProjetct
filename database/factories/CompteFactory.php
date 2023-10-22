<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compte>
 */
class CompteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name();
        return [
            "nom" => $name,
            "lienCompte" =>"streamingVideo/@".str()->slug($name),// fake()->url(),
            //"type_id" => rand(1,5),
            "user_id" => rand(1,15) 
        ];
    }
}
