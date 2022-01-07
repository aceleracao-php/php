<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RevistaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nome" => "Revista Postgres ATEMP: ##".$this->faker->name(),
            "edicao" => "Edition: ".$this->faker->randomNumber(5, true),
            "ano" => $this->faker->date('Y'),
            "tema" => $this->faker->sentence(1),
            "views" => $this->faker->randomNumber(8, true)
        ];
    }
}
