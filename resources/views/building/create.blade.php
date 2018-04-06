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





    <form action="{{route('buildings.store')}}" method="post">
        {{csrf_field()}}

        <div class="form-group row">
            <label for="example-name-input" class="col-2 col-form-label">Nazwa budynku</label>
            <div class="col-10">
                <input placeholder="Podaj nazwę budynku" type="text" class="form-control valid" name="name_build" required>
            </div>
        </div>


        <div class="form-group row">
            <label for="example-surname-input" class="col-2 col-form-label">Kod pocztowy</label>
            <div class="col-10">
                <input placeholder="Podaj kod pocztowy w formacie xx-xxx" type="text" class="form-control valid" name="post_code" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Miasto</label>
            <div class="col-10">
                <input placeholder='nazwa miasta' type="text" class="form-control" name="city">
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Adres</label>
            <div class="col-10">
                <input placeholder="ulica, numer lokalu" type="text" class="form-control valid" name="adress" required>
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