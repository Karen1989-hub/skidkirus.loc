@extends('layout.singlPagesMaket')

@section('header')
    @parent
@endsection

@section('menu')
    @parent
@endsection

@section('content')
    {{--    go home page--}}
    <div class ="breadcrumbs">
        <ul class="breadcrumbs_list">
            <li class="breadcrumbs_item">
                <a class="breadcrumbs_item_list" href="{{route('home')}}">Главная</a>
                <span class ="span-arrow">&#8594;</span>
            </li>
            <li class="breadcrumbs_item">
                <span>отели</span>
            </li>
        </ul>
    </div>
    {{--    go home page end--}}


<div class="cards__bg">
                    <section class="slider">
                        @if($popHotel != null)
                                @foreach($popHotel as $val)

                                    <a href="{{$val->sitesUrl}}"><img src="./img/popHotelImg/{{$val->popHotelImg}}">
                                        <div style="margin-left: 20px"><span>{{$val->name}}</span><br>
                                            {{$val->description}}</div>

                                    </a>

                                @endforeach
                            @endif
                            @if($allHotel != null)
                                @foreach($allHotel as $val)

                                    <a href="{{$val->sitesUrl}}"><img src="./img/popHotelImg/{{$val->popHotelImg}}">
                                        <div style="margin-left: 20px"><span>{{$val->name}}</span><br>
                                            {{$val->description}}</div>

                                    </a>

                                @endforeach
                            @endif
                            @if($popHotelcategory != null)
                                @foreach($popHotelcategory as $val)
                                    <a href="{{$val->sitesUrl}}"><img src="./img/popHotelImg/{{$val->popHotelImg}}">
                                        <div style="margin-left: 20px"><span>{{$val->name}}</span><br>
                                            {{$val->description}}</div>

                                    </a>
                                @endforeach
                            @endif
                            @if($allHotelcategory != null)
                                @foreach($allHotelcategory as $val)
                                    <a href="{{$val->sitesUrl}}"><img src="./img/popHotelImg/{{$val->popHotelImg}}">
                                        <div style="margin-left: 20px"><span>{{$val->name}}</span><br>
                                            {{$val->description}}</div>
                                    </a>
                                @endforeach
                            @endif
                    </section>
                </div>
@endsection

@section('footer')
    @parent
@endsection
