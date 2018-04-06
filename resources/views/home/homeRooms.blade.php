@extends('layouts.front')

@section('content')

    {{--<pre>--}}


   <?php //print_r($dane);
         //die();
           ?>

    {{--</pre>--}}

    <div class="container">
        <div class="row">
            <div class="nav flex-column nav-pills col-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                @foreach($dane['lista_wydzialow'] as $wydzialy)
                <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#{{$wydzialy}}" role="tablist"
                   aria-controls="v-pills-home" aria-selected="true">{{$wydzialy}}</a>
                @endforeach
            </div>


            <div class="tab-content col-9" id="v-pills-tabContent">
                @foreach($dane['lista_wydzialow'] as $wydzialy)
                <div class="tab-pane fade " id="{{$wydzialy}}" role="tabpanel" aria-labelledby="v-pills-home-tab">

                    <div class="nav flex-column nav-pills col-3 " id="v-pills-tab" role="tablist"
                         aria-orientation="vertical">
                        @foreach($dane['lista_budynkow'][$wydzialy] as $budynki)
                        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#{{$budynki}}" role="tablist"
                           aria-controls="v-pills-home" aria-selected="true">{{$budynki}}</a>
                        @endforeach
                    </div>
                    <div class="tab-content col-6 " id="v-pills-tabContent">
                    @foreach($dane['lista_budynkow'][$wydzialy] as $budynki)
                    <div class="tab-pane fade" id="{{$budynki}}" role="tabpanel" aria-labelledby="v-pills-home-tab">

                        <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">

                            @foreach($dane['tablica_budynkow'][$budynki] as $klucz => $sale)
                            <a class="nav-link"  href="{{route('homeRooms.show',$klucz, '14')}}" role="tab"
                               aria-controls="v-pills-home" aria-selected="true">{{$sale}}</a>


                            @endforeach

                        </div>


                    </div>
                    @endforeach
                    </div>
                </div>
                @endforeach
            </div>


        </div>

    </div>

@endsection