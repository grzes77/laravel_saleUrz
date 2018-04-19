<?php

namespace App\Http\Controllers;

use App\Building;
use App\EventModel;
use App\Faculty;
use App\Reservation;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class HomeRoomsController extends Controller
{

    public function index()
    {
        $i = 0;
        $Faculties = Faculty::all();

        foreach($Faculties as $Wiersz)
        {

            $dane['lista_wydzialow'][$i] = $Wiersz->name_faculty ;
            $id_wydz = $id_wydzialu[$i] = $Wiersz->id;
            $nazwa_wydz = $dane['lista_wydzialow'][$i];

            $Rezultat2 = Building::where('faculty_id',$Wiersz->id)->get();


            $j = 0;
            foreach ($Rezultat2 as $Wiersz2) {

                $tablica_budynkow[$j] = $Wiersz2->name_build ;
                $zmienna_id_budynku = $Wiersz2->id;
                $nazwa_budynku = $Wiersz2->name_build;
                $Rezultat3 = Room::where('building_id', $Wiersz2->id )->get();
                $tablica_sale = [];


                foreach($Rezultat3  as $Wiersz3 )
                {
                    $tablica_sale[$Wiersz3->id] = $Wiersz3->number;
                }

                $dane['tablica_budynkow'][$nazwa_budynku]= $tablica_sale ;
                $tablica_sale = array();

                $j++;

            } // koniec drugiej petli REZULTAT 2

            $dane['lista_budynkow'][$nazwa_wydz] = $tablica_budynkow;
            $tablica_budynkow = [];

            $i++;

        }// koniec petli foreach


        return view('home.homeRooms' , ['dane' => $dane]);

    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @param string $week
     * @return \Illuminate\Http\Response
     */
    public function show($id )
    {

        $revervation = Reservation::where('room_id', $id)->with('event')->get();

        //dd($revervation);

        $event = [];


        foreach( $revervation as $reserv) {


            $event[] = Calendar::event(
                $reserv->id." <br/> ".$reserv->event->name_events, //event title
                $reserv->event->name_events,
                false, //full day event?
                $reserv->started, //start time (you can also use Carbon instead of DateTime)
                $reserv->ended, //end time (you can also use Carbon instead of DateTime)
                'stringEventId', //optionally, you can specify an event ID
                [

                ]

            );
        }

       $calendar = Calendar::addEvents($event)->setOptions([
           'defaultView' => 'agendaWeek',

       ]);



        $room = Room::where('id', $id)->get();

        return view('home.homeRoomsProfile',[
            'room' =>$room,
            'calendar' => $calendar

        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
