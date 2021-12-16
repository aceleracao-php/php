<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArtigoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => "Titulo Fake: ".$this->faker->name(),
            "resumo" => "Resumo Fake: ".$this->faker->paragraph(2),
            "content" => "Content Fake: ".$this->faker->paragraph(5)
        ];
    }
}
