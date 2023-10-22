<?php

namespace Database\Factories;

use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\reseau>
 */
class ReseauFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name();
        $type_id = rand(1,5);
        $nomType = Type::find($type_id)->nom;
        return [
            "nom" => $name,
            "lienReseaux" => $nomType."/@".str()->slug($name),
            //"lienReseaux" => Type::where("id",$type)->nom."/@".str()->slug($name),
            "user_id" => rand(1,15),
            "type_id" => $type_id
        ];
    }
}
