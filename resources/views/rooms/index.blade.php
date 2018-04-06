@extends('layouts.front')

@section('title','cos fajnego')

@section('content')

    <table class="table table-hover">
        <tr>
            <th>numer</th>
            <th>nazwa budynku</th>
            <th>liczba miejsc</th>
            <th>powierzchnia</th>
            <th>liczba komp</th>
            <th>edit</th>
            <th>delete</th>
        </tr>

        @foreach($rooms as $room)
            <tr>
                <td>{{$room->number}}</td>
                <td>{{$room->building->name_build}}</td>
                <td>{{$room->numbers_of_seats}}</td>
                <td>{{$room->surface}}</td>
                <td>{{$room->numbers_of_computers}}</td>
                <td><a href="{{route('rooms.edit', $room->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{route('rooms.destroy',$room->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="delete">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

        @endforeach

    </table>

    {{$rooms->links()}}

@endsection