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





    <form action="{{route('fieldStudies.store')}}" method="post">
        {{csrf_field()}}

        <div class="form-group row">
            <label for="example-name-input" class="col-2 col-form-label">Nazwa kierunku</label>
            <div class="col-10">
                <input placeholder="Podaj nazwe kierunku studiów" type="text" class="form-control valid" name="name_field_study" required>
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
            <label class="col-2 col-form-label">Tryb studiów</label>
            <div class="col-10">

                <select name="mode_of_study" class="form-control">
                      <option value="stacjonarne">stacjonarne</option>
                      <option value="niestacjonarne">niestacjonarne</option>
                      <option value="podyplomowe">podyplopowe</option>

                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Rok rozpoczęcia</label>
            <div class="col-10">
                <input placeholder="rok rozpoczęcia studiów" type="number" min="2010" max="2030" class="form-control valid" name="year_of_start" required>
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