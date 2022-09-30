<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'content' => $this->faker->paragraph(1),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
            'rubric_id' => $this->faker->numberBetween(1,3)
        ];
    }
}
