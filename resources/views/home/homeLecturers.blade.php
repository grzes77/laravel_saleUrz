@extends('layouts.front')

@section('content')


    <div class="container">
        <div class="row">
            <div class="nav flex-column nav-pills col " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                @foreach($dane['lista_wydzialow'] as $wydzialy)
                    <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#{{$wydzialy}}" role="tablist"
                       aria-controls="v-pills-home" aria-selected="true">{{$wydzialy}}</a>
                @endforeach
            </div>


            <div class="tab-content col " id="v-pills-tabContent">
                @foreach($dane['lista_wydzialow'] as $wydzialy)
                    <div class="tab-pane fade " id="{{$wydzialy}}" role="tabpanel" aria-labelledby="v-pills-home-tab">

                        <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            @foreach($dane['lista_wykladowcow'][$wydzialy] as $wykladowca)
                            <a class="nav-link"  href="{{route('homeLectures.show',$wykladowca['id_prowadzacego'])}}" role="tab" aria-controls="v-pills-home" aria-selected="true">{{$wykladowca['stopien_naukowy'].' '.$wykladowca['imie'].' '.$wykladowca['nazwisko']}}</a>
                            @endforeach
                        </div>

                    </div>
                @endforeach
            </div>


        </div>

    </div>
@endsection