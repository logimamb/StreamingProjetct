<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Commentaire;
use App\Models\Compte;
use App\Models\CompteLiveStatistique;
use App\Models\Live;
use App\Models\LiveRessource;
use App\Models\reseau;
use App\Models\Ressource;
use App\Models\Statistique;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(TypeSeeder::class);

        User::factory(15)->create();
        Compte::factory(30)->create();
        Statistique::factory(250)->create();
        Commentaire::factory(1500)->create();
        Ressource::factory(75)->create();
        Live::factory(15)->create();
        CompteLiveStatistique::factory(180)->create();
        LiveRessource::factory(250)->create();
        reseau::factory(250)->create();
    }
}
