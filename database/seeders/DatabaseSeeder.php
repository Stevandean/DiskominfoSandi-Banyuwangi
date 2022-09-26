<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Document;
use App\Models\Service;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   

        //------------ untuk membuat 5 User --------------
        User::factory(5)->create();

        //------------- membuat 5 barita ---------------
        News::factory(5)->create();

        // ------------- membuat lima document --------
        Document::factory(5)->create();

        //------------- membuat 5 gallery ------------
        Gallery::factory(5)->create();

        //------------- membuat 5 category ------------
        Category::factory(10)->create();

        //------------- membuat 5 service ------------
        Service::factory(5)->create();
        
    }
}
