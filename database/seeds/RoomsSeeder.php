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
        $events_data = ['programowanie', 'algorytmy', 'angielski', 'programowanie zespołowe'];

        foreach ($events_data as $event_date) {
            $event = new \App\Event();
            $event->name_events = $event_date;
            $event->faculty_id = 1;
            $event->save();
        }
    }
}
