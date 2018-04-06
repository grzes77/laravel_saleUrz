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





    <form action="{{route('typeRooms.store')}}" method="post">
        {{csrf_field()}}

        <div class="form-group row">
            <label for="example-name-input" class="col-2 col-form-label">Nazwa rodzaju sali</label>
            <div class="col-10">
                <input placeholder="Podaj nazwe typu sali " type="text" class="form-control valid" name="name" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Rezerwacja sali</label>
            <div class="col-10">

                <select name="reservation_type" class="form-control">

                        <option value="0">Dowolna rezerwacja sali</option>
                        <option value="1">Brak możliwości rezerwacji</option>

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