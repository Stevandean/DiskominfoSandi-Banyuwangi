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
            'user_id' => mt_rand(1,5), //dapatkan user id dari 1 - 5 acak
            'category' => Array('goverment', 'technology', 'berita')[mt_rand(0,2)],
            'title' => $this->faker->sentence(mt_rand(3,8)),
            'slug' => $this->faker->slug(),
            'body' => collect($this->faker->paragraphs(mt_rand(1,3)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode('')
        ];
    }
}
