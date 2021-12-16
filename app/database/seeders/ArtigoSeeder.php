<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArtigoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //// \App\Models\User::factory(10)->create();
        /*$array = ['esporte', 'tecnology'];
        \App\Models\Artigo::create([
            "title" => "Segundo Seeder Artigo",
            "resumo" => "kldjsalkdjskadjakldjaskjdlkasdas45465654",
            "content" => "1564546kldjsalkdjskadjakldjaskjdlkasdas45465654"
        ]);

        \App\Models\Artigo::create([
            "title" => "Terceiro Seeder Artigo",
            "resumo" => "kldjsalkdjskadjakldjaskjdlkasdas45465654",
            "content" => "1564546kldjsalkdjskadjakldjaskjdlkasdas45465654"
        ]);*/
        \App\Models\Artigo::factory(300)->create();
        //\App\Models\Artigo::factory()->count(120)->create();
    }
}
