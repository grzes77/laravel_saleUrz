@extends('layouts.front')

@section('content')

    <table class="table table-hover">
        <tr>
            @foreach($room as $one_room)
            <td>Numer sali</td>
            <td>{{$one_room->number}}</td>

        </tr>
        <tr>
            <td>Nazwa budynku</td>
            <td>{{$one_room->building->name_build}}</td>
        </tr>
        <tr>
            <td>Nazwa wydziału</td>
            <td>{{$one_room->building->faculty->name_faculty}}</td>
        </tr>
        <tr>
            <td>Powierzchnia</td>
            <td>{{$one_room->surface}} m<sup>2</sup></td>
        </tr>
        <tr>
            <td>Uwagi dodatkowe</td>
            <td>{{$one_room->addition_information}}</td>
        </tr>

        @endforeach

    </table>

    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}

    @endsection