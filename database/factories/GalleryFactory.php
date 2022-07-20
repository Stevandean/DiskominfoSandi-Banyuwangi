<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $type = ['image', 'video'];

        return [
            'title' => $this->faker->words(mt_rand(1,4), true),
            'body' => $this->faker->paragraph(mt_rand(3,5)),
            'source' => $this->faker->lexify('??????????????????????.jpg'),
            'type' => $type[mt_rand(0,1)]
        ];
    }
}
