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





    <form action="{{route('rooms.store')}}" method="post">
        {{csrf_field()}}

        <div class="form-group row">
            <label for="example-name-input" class="col-2 col-form-label">Numer/nazwa sali</label>
            <div class="col-10">
                <input placeholder="Podaj liczbe lub nazwe sali" type="text" class="form-control valid" name="number" required>
            </div>
        </div>

        <div class="form-group row">
                <label class="col-2 col-form-label">Wybierz budynek</label>
                <div class="col-10">

                    <select name="building_id" class="form-control">
                        @foreach($builds as $build)
                            <option value="{{$build->id}}"> {{$build->name_build}}</option>

                        @endforeach
                    </select>
                </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Rodzaj sali</label>
            <div class="col-10">

                <select name="type_romms_id" class="form-control">
                    @foreach($type_rooms as $type_room)
                        <option value="{{$type_room->id}}"> {{$type_room->name}}</option>

                    @endforeach
                </select>
            </div>
        </div>



        <div class="form-group row">
            <label for="example-surname-input" class="col-2 col-form-label">Liczba miejsc</label>
            <div class="col-10">
                <input placeholder="Liczba miejsc w sali" type="text" class="form-control valid" name="numbers_of_seats" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Powierzchnia</label>
            <div class="col-10">
                <input placeholder='powierzchnia sali w m2' type="text" class="form-control valid" name="surface" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Liczba kompuetrów</label>
            <div class="col-10">
                <input placeholder="Licza komputerów znajdujących się w sali" type="text" class="form-control valid" name="numbers_of_computers" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">wyposażenie dodatkowe</label>
            <div class="col-10">
                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="np. projektor" name="additional_equipment"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Informacje dodatkowe</label>
            <div class="col-10">
                <textarea class="form-control" id="exampleTextarea" rows="3" name="addition_information" ></textarea>
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