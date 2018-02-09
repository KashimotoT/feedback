<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FeedbackTableSeeder extends Seeder
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
            DB::table('feedback')->insert([
                'work_id'      => $faker->numberBetween(1, 10),
                'content'  => $faker->realText(),
                'created_at' => $faker->dateTimeThisYear($max = 'now', $timezone = 'Asia/Tokyo'),
                'updated_at' => $faker->dateTimeThisYear($max = 'now', $timezone = 'Asia/Tokyo'),
            ]);
        }
    }
}
