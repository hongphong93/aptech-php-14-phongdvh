<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class UsersTableSeeder extends Seeder
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
        for($i=0;$i<5;$i++){
            User::create([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>$faker->password,
                'dob'=>$faker->dateTimeBetween($startDate = '-30 years', $endDate = '-15 years', $timezone = null),
                'address'=>$faker->address,
                'phone'=>$faker->e164PhoneNumber,
            ]);
        };
    }
}
