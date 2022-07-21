<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Document;
use App\Models\Information;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //---------- untuk mmebuat 3 category ------------
        Category::create([
            "name" => "umum",
            "slug" => "umum"
        ]);
        Category::create([
            "name" => "informatika",
            "slug" => "informatika"
        ]);
        Category::create([
            "name" => "persandian",
            "slug" => "persandian"
        ]);

        //------------ untuk membuat 5 User --------------
        User::factory(5)->create();

        //------------- membuat 5 barita ---------------
        News::factory(5)->create();

        // ------------- membuat lima document --------
        Document::factory(5)->create();

        //------------- membuat 5 gallery ------------
        Gallery::factory(5)->create();

        //-------------- membuat 5 informasi ----------
        Information::factory(5)->create();

        
    }
}
