<?php

use Illuminate\Database\Seeder;
use App\Building;

class BuildsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pl_PL');

        for($i=1 ; $i<50 ; $i++){
            $build = new Building();
            $build->name_build = $faker->word();
            $build->post_code = $faker->postcode();
            $build->city = $faker->city();
            $build->adress = $faker->address();
            $build->faculty_id = $faker->numberBetween(1,12);
            $build->save();


        }
    }
}
