<?php

namespace Database\Seeders;

use App\Models\book;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        DB::table('books')->insert([
            'publisher_id' => $faker->numberBetween(1,3),
            'title'=> 'The Clouds that Danced like',
            'author' => 'John Doe',
            'year' => 2022,
            'synopsis' => $faker->text,
            'image'=>'The_Clouds_that_Danced_like.png'
        ]);
        DB::table('books')->insert([
            'publisher_id' => $faker->numberBetween(1,3),
            'title'=> 'Mean Goblin',
            'author' => 'Anonymous',
            'year' => 2022,
            'synopsis' => $faker->text,
            'image'=>'Mean_Goblin.png'
        ]);
        DB::table('books')->insert([
            'publisher_id' => $faker->numberBetween(1,3),
            'title'=> 'The Giant Blade',
            'author' => ' Untitled writer',
            'year' => 2022,
            'synopsis' => $faker->text,
            'image'=>'The_Giant_Blade.png'
        ]);
        DB::table('books')->insert([
            'publisher_id' => $faker->numberBetween(1,3),
            'title'=> 'The Silver Guillotine',
            'author' => ' Untitled writer',
            'year' => 2022,
            'synopsis' => $faker->text,
            'image'=>'The_Silver_Guillotine.png'
        ]);
        DB::table('books')->insert([
            'publisher_id' => $faker->numberBetween(1,3),
            'title'=> 'The Drizzle that Rained like Sitting Humming birds',
            'author' => 'John Doe',
            'year' => 2022,
            'synopsis' => $faker->text,
            'image'=>'The_Drizzle_that_Rained_like_Sitting_Humming_birds.png'
        ]);
        DB::table('books')->insert([
            'publisher_id' => $faker->numberBetween(1,3),
            'title'=> 'Intuitive Pete Sparkle',
            'author' => 'Anonymous',
            'year' => 2022,
            'synopsis' => $faker->text,
            'image'=>'Intuitive_Pete_Sparkle.png'
        ]);
    }
}
