@extends('layout.singlPagesMaket')

@section('header')
    @parent
@endsection

@section('menu')
    @parent
@endsection

@section('content')
<div class="cards__bg">
                    <section class="slider">
                        @foreach($popHotel as $val)
                            <h2>text2</h2>
                            <a href="{{$val->sitesUrl}}"><img class="hotel__slider-img slick-slide slick-active" src="./img/popHotelImg/{{$val->popHotelImg}}">
                                <div style="margin-left: 20px"><span>{{$val->name}}</span><br>
                                    {{$val->description}}</div>

                            </a>

                        @endforeach
                    </section>
                </div>
@endsection

@section('footer')
    @parent
@endsection
