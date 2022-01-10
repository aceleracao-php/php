<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EscritorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Escritor::factory(350)->create();
    }
}
