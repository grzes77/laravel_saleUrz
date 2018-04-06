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


        $user = new User();
        $user->name = 'admin';
        $user->surname = $faker->lastName();
        $user->academy_degree = $faker->title();
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('admin');
        $user->save();


        $user = new User();
        $user->name = 'user';
        $user->surname = $faker->lastName();
        $user->academy_degree = $faker->title();
        $user->email = 'user@user.com';
        $user->password = bcrypt('user');
        $user->save();

        $user = new User();
        $user->name = 'login';
        $user->email = 'login@login.com';
        $user->surname = $faker->lastName();
        $user->academy_degree = $faker->title();
        $user->password = bcrypt('login');
        $user->save();




//        $faker = \Faker\Factory::create('pl_PL');
//
//        for($i=1 ; $i<100; $i++){
//            $user = new \App\User();
//            $user->name = $faker->firstNameMale();
//            $user->surname = $faker->lastName();
//            $user->academy_degree = $faker->title();
//            $user->email = $faker->email();
//            $user->password = bcrypt('user');
//            $user->role_id = 0;
//            $user->save();
//
//        }
    }
}
