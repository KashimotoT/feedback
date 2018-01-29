<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('ja_JP');
        for ($i = 1; $i < 11; $i++) {
            DB::table('works')->insert([
                'author'     => $faker->name(),
                'title'      => $faker->word(),
                'created_at' => $faker->dateTimeThisYear($max = 'now', $timezone = 'Asia/Tokyo'),
                'updated_at' => $faker->dateTimeThisYear($max = 'now', $timezone = 'Asia/Tokyo'),
            ]);
        }
    }
}
