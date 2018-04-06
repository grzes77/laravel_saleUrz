@extends('layouts.front')

@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif





    <form action="{{route('events.store')}}" method="post">
        {{csrf_field()}}

        <div class="form-group row">
            <label for="example-name-input" class="col-2 col-form-label">Nazwa przedmiotu</label>
            <div class="col-10">
                <input placeholder="Podaj nazwa przedmiotu" type="text" class="form-control valid" name="name_events" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Wydział</label>
            <div class="col-10">

                <select name="faculty_id" class="form-control">
                    @foreach($faculties as $faculty)
                        <option value="{{$faculty->id}}"> {{$faculty->name_faculty}}</option>

                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label"></label>
            <div class="col-10">
                <button class="btn btn-primary">Dodaj</button>
            </div>
        </div>

    </form>






@endsection