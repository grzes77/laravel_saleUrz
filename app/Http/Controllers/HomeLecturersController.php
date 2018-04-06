<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Field_study;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeLecturersController extends Controller
{

    public function index()
    {
        $i = 0;

        $Rezultat = Faculty::all();

        foreach($Rezultat as $Wiersz)
        {

            $dane['lista_wydzialow'][$i] = $Wiersz->name_faculty ;
            $id_wydz = $id_wydzialu[$i] = $Wiersz->id;
            //echo $id_wydz;

            $nazwa_wydz = $dane['lista_wydzialow'][$i];
            $j = 0;
            $tablica_wykladowcow = [];

            $Rezultat2 = DB::table('user_faculty')
                ->join('users', 'users.id', '=', 'user_faculty.user_id')
                ->select('users.*')
                ->where('user_id', $Wiersz->id)
                ->get();


            foreach ($Rezultat2 as $Wiersz2) {


                $tablica_wykladowcow[$j]['stopien_naukowy'] = $Wiersz2->academy_degree;
                $tablica_wykladowcow[$j]['imie'] = $Wiersz2->name;
                $tablica_wykladowcow[$j]['nazwisko'] = $Wiersz2->surname;
                $tablica_wykladowcow[$j]['id_prowadzacego'] = $Wiersz2->id;


                $j++;


            } ;
            $dane['lista_wykladowcow'][$nazwa_wydz] = $tablica_wykladowcow;
            $tablica_wykladowcow = array();

            $i++;

        }


        return view('home.homeLecturers',[
            'dane' => $dane
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $lectures = User::where('id', $id)->get();

        return view('home.homeLecturesProfile', [
            'lectures' => $lectures
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
