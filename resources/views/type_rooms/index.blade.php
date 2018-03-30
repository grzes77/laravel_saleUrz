@extends('layouts.front')

@section('title','cos fajnego')

@section('content')

    <table class="table table-hover">
        <tr>
            <th>id</th>
            <th>nazwa</th>
            <th>rodzaj rezerwacji</th>
            <th>edit</th>
            <th>delete</th>
        </tr>

        @foreach($type_rooms as $type_room)
            <tr>
                <td>{{$type_room->id}}</td>
                <td>{{$type_room->name}}</td>

                @if($type_room->reservation_type == 0)
                    <td >Można rezerwowac</td>
                @else
                    <td class="alert-danger">Brak możliwosci rezerwacji sali</td>
                @endif

                <td><a href="{{route('faculties.edit', $type_room->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{route('faculties.destroy',$type_room->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="delete">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

        @endforeach

    </table>



@endsection