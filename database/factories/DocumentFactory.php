<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Document>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(mt_rand(1,3), true),
            'source' => $this->faker->lexify('??????????????????????.pdf'),
            'create_date' => $this->faker->dateTimeThisYear()
        ];
    }
}
