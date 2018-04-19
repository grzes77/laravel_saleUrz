@extends('layouts.front')

@section('content')


    <table class="table table-hover">
        <tr>
            @foreach($lectures as $lecture)
            <td>Imie</td>
            <td>{{$lecture->name}}</td>

        </tr>
        <tr>
            <td>Nazwisko</td>
            <td>{{$lecture->surname}}</td>
        </tr>
        <tr>
            <td>Stopien naukowy</td>
            <td>{{$lecture->academy_degree}}</td>
        </tr>


        @endforeach

    </table>

    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}

    @endsection