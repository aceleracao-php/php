<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RevistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Revista::factory(200)->create();
    }
}
