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





    <form action="{{route('users.store')}}" method="post">
        {{csrf_field()}}

        <div class="form-group row">
            <label for="example-name-input" class="col-2 col-form-label">Imię</label>
            <div class="col-10">
                <input placeholder="Podaj swoje imię" type="text" class="form-control valid" name="name" required>
            </div>
        </div>


        <div class="form-group row">
            <label for="example-surname-input" class="col-2 col-form-label">Nazwisko</label>
            <div class="col-10">
                <input placeholder="Podaj swoje nazwisko" type="text" class="form-control valid" name="surname " required>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Tytuł naukowy</label>
            <div class="col-10">
                <input placeholder='po spacji, np. "dr inż."' type="text" class="form-control" name="academy_degree">
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Email</label>
            <div class="col-10">
                <input placeholder="podaj maila" type="text" class="form-control valid" name="email" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Hasło</label>
            <div class="col-10">
                <input placeholder="haslo " type="password" class="form-control valid" name="password" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Powtórz hasło</label>
            <div class="col-10">
                <input placeholder=" powtorz haslo " type="password" class="form-control" name="password_confirmation">
            </div>
        </div>

        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Uprawnienia użytkownika</label>
            <div class="col-10">
                @foreach($roles as $role)
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"name="role_id[]" value="{{$role->id}}">
                        {{$role->name}}
                    </label><br/>
                @endforeach
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