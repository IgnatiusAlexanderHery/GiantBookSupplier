<?php

namespace Database\Seeders;

use App\Models\book;
use App\Models\book_category;
use App\Models\categories;
use App\Models\publisher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PublisherSeeder::class,
            BookSeeder::class,
            CategoriesSeeder::class,
            BookCategorySeeder::class
        ]);
    }
}
