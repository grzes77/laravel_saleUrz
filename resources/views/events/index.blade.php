@extends('layouts.front')

@section('title','cos fajnego')

@section('content')


    <table class="table table-hover">
        <tr>
            <th>id</th>
            <th>nazwa</th>
            <th>nazwa wydzialu</th>
            <th>edit</th>
            <th>delete</th>
        </tr>

        @foreach($events as $event)
            <tr>
                <td>{{$event->id}}</td>
                <td>{{$event->name_events}}</td>
                <td>{{$event->faculty->name_faculty}}</td>

                <td><a href="{{route('faculties.edit', $event->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{route('faculties.destroy',$event->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="delete">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

        @endforeach

    </table>



@endsection