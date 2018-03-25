<?php

use Illuminate\Database\Seeder;
use App\Type_room;

class Type_roomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_room = new Type_room();
        $type_room->name = 'wykładowa';
        $type_room->reservation_type = '0';
        $type_room->save();

        $type_room = new Type_room();
        $type_room->name = 'labolatoryjna';
        $type_room->reservation_type = '0';
        $type_room->save();

        $type_room = new Type_room();
        $type_room->name = 'konferencyjna';
        $type_room->reservation_type = '0';
        $type_room->save();

        $type_room = new Type_room();
        $type_room->name = 'remont';
        $type_room->reservation_type = '1';
        $type_room->save();

        $type_room = new Type_room();
        $type_room->name = 'ćwiczeniowa';
        $type_room->reservation_type = '0';
        $type_room->save();
    }
}
