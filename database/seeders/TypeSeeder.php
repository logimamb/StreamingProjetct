<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("types")->insert([
            ["nom" => "Facebook"],
            ["nom" => "Youtube"],
            ["nom" => "Instagram"],
            //["nom" => "X"],
            ["nom" => "TikTok"],
            //["nom" => "Snapchat"],
            //["nom" => "Tinder"],
            ["nom" => "Telegram"],
            //["nom" => "Signal"],
            //["nom" => "WhatsApp"],
        ]);
    }
}
