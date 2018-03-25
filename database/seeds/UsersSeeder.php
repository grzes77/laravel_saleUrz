<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pl_PL');

        for($i=1 ; $i<100; $i++){
            $user = new \App\User();
            $user->name = $faker->firstNameMale();
            $user->surname = $faker->lastName();
            $user->academy_degree = $faker->title();
            $user->email = $faker->email();
            $user->password = bcrypt('user');
            $user->role_id = 0;
            $user->save();

        }
    }
}
