<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Statistique>
 */
class StatistiqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "NbVue" => rand(1,1500),
            "NbLike" => rand(0,500),
            "NbDislike" => rand(0,450),
            "NbPartage" => rand(1,550)
        ];
    }
}
