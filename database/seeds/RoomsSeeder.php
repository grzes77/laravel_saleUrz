<?php

use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pl_PL');

        for($i=1; $i< 20 ; $i++) {
            $room = new \App\Room();
            $room->number = $faker->numberBetween(100,500);
            $room->building_id = $faker->numberBetween(1,20);
            $room->type_romms_id = $faker->numberBetween(1,3);
            $room->numbers_of_seats = $faker->numberBetween(1,100);
            $room->surface = $faker->numberBetween(1,100);
            $room->numbers_of_computers = $faker->numberBetween(1,10);
            $room->additional_equipment = 'brak';
            $room->addition_information = 'brak';
            $room->save();
        }
    }
}
