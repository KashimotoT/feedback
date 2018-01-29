<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('ja_JP');
        for ($i = 1; $i < 11 ; $i++) {
            DB::table('users')->insert([
                'name'     => $faker->name(),
                'email'    => $faker->email(),
                'password' => $faker->password(),
                'created_at' => $faker->dateTimeThisYear($max = 'now', $timezone = 'Asia/Tokyo'),
                'updated_at' => $faker->dateTimeThisYear($max = 'now', $timezone = 'Asia/Tokyo'),
            ]);
        }
    }
}
