<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1,5),
            'category_id' => mt_rand(1,3),
            'title' => $this->faker->sentence(mt_rand(3,8)),
            'slug' => $this->faker->slug(),
            'body' => collect($this->faker->paragraphs(mt_rand(1,3)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode('')
        ];
    }
}
