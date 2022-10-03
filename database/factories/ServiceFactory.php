<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //random link
        $link = "";
        for($i = 0 ; $i <= mt_rand(1,4) ; $i++){
            $link .="/".$this->faker->word();
        }

        //random relation with category
        //get all available category ID
        $category = Category::all()->random();

        return [
            'name' => $this->faker->words(mt_rand(1,3), true),
            'link' => $link,
            'category_id' => $category->id,
            'description' => $this->faker->paragraphs(mt_rand(3,4), true)
        ];
    }
}
