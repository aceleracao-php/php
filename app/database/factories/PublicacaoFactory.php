<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PublicacaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => "Publicacao | Nova postagem: ".$this->faker->name(),
            "resumo" => "Content da publi: ".$this->faker->paragraph(3),
        ];
    }
}
