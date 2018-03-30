@extends('layouts.front')

@section('title','cos fajnego')

@section('content')

    <table class="table table-hover">
        <tr>
            <th>id</th>
            <th>nazwa</th>
            <th>miasto</th>
            <th>adres</th>
            <th>Kod pocztowy</th>
            <th>edit</th>
            <th>delete</th>
        </tr>

        @foreach($buildings as $building)
            <tr>
                <td>{{$building->id}}</td>
                <td>{{$building->name_build}}</td>
                <td>{{$building->city}}</td>
                <td>{{$building->adress}}</td>
                <td>{{$building->post_code}}</td>
                <td><a href="{{route('buildings.edit', $building->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{route('buildings.destroy',$building->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="delete">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

        @endforeach

    </table>

    {{$buildings->links()}}

@endsection