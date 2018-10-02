<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        for ($i = 0;$i < 10; $i++){
            DB::table('posts')->insert([
            'title'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
            'description'=> $faker->sentence($nbWords = 30, $variableNbWords = true),
            'content'=> $faker->sentence($nbWords = 324, $variableNbWords = true),
                ]);
        };
        
    }
}
