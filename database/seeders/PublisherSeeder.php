<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\publisher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create('id_ID');
        DB::table('publishers')->insert([
            'name'=>'Grametia',
            'address'=>$faker->address,
            'phone'=>$faker->phoneNumber,
            'email'=>$faker->companyEmail,
            'image'=>$faker->imageUrl
        ]);

        DB::table('publishers')->insert([
            'name'=>'Laraza',
            'address'=>$faker->address,
            'phone'=>$faker->phoneNumber,
            'email'=>$faker->email,
            'image'=>$faker->imageUrl
        ]);

        DB::table('publishers')->insert([
            'name'=>'Foteck',
            'address'=>$faker->address,
            'phone'=>$faker->phoneNumber,
            'email'=>$faker->email,
            'image'=>$faker->imageUrl
        ]);
    }
}
