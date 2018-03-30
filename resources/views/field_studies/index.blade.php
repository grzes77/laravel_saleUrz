@extends('layouts.front')

@section('title','cos fajnego')

@section('content')

    <table class="table table-hover">
        <tr>
            <th>id</th>
            <th>nazwa</th>
            <th>tryb studiow</th>
            <th>rok rozpoczecia</th>
            <th>edit</th>
            <th>delete</th>
        </tr>

        @foreach($field_studies as $field_study)
            <tr>
                <td>{{$field_study->id}}</td>
                <td>{{$field_study->name_field_study}}</td>
                <td>{{$field_study->mode_of_study}}</td>
                <td>{{$field_study->year_of_start}}</td>

                <td><a href="{{route('faculties.edit', $field_study->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{route('faculties.destroy',$field_study->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="delete">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

        @endforeach

    </table>



@endsection