<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PublicacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Publicacao::factory(250)->create();
    }
}
