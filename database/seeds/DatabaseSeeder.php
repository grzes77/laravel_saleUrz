<?php

use Illuminate\Database\Seeder;
use App\Type_room;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(Type_roomSeeder::class);
        $this->call(BuildsSeeder::class);
        $this->call(FacultiesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(EventsSeeder::class);
    }
}
