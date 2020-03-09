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
                <span>магазины</span>
            </li>
        </ul>
    </div>
    {{--    go home page end--}}


    <div class="cards__bg">
    <div class="cards allTours" style="margin-bottom: 50px">
            @foreach($popShop as $val)
                
                <a href="{{$val->sitesUrl}}"><img src="./img/popShop/{{$val->imageUrl}}">
                    <div style="margin-left: 20px"><span>{{$val->name}}</span><br>
                        {{$val->description}}</div>

                </a>

            @endforeach
            @foreach($getAllShopsPage as $val)
                
                <a href="{{$val->sitesUrl}}"><img src="./img/popShop/{{$val->imageUrl}}">
                    <div style="margin-left: 20px"><span>{{$val->name}}</span><br>
                        {{$val->description}}</div>

                </a>

            @endforeach
        </div>
    </div>
@endsection

@section('footer')
    @parent
@endsection
