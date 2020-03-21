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
                <span>тавары по купонам</span>
            </li>
        </ul>
    </div>
    {{--    go home page end--}}

    {{--  reklamniy  baner--}}
    <a href="#header" class="go__top"></a>
    <div class="slider__contanier">
        <div class="auto__slider">
            <div class="slider-items"></div>
            <div class="slider-items"></div>
            <div class="slider-items"></div>
        </div>
    </div>
    {{--  reklamniy  baner end--}}

    <div class="cards allTours" style="margin-bottom: 50px">
    @if($PopCuponProduct != null)
        @foreach($PopCuponProduct as $val)
            <div class="main__content card_content">
                <div class="card__img">
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @else
                        #
@endif"><img src="./img/popCuponProductImg/{{$val->imageUrl}}" alt=""></a>
                </div>
                @if($val->discount != null)
                    <div class="card__discount big">
                        <a href="#">{{$val->discount}}%</a>
                    </div>
                @endif
                <p>
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @endif  " class="tur__location">{{$val->name}}</a>
                </p>
                <div class="card__title">
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @endif  ">{{$val->description}}</a>
                </div>
            </div>
        @endforeach
    @endif
        @if($AllCuponProduct != null)
            @foreach($AllCuponProduct as $val)
            <div class="main__content card_content">
                <div class="card__img">
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @else
                        #
@endif"><img src="./img/popCuponProductImg/{{$val->imageUrl}}" alt=""></a>
                </div>
                @if($val->discount != null)
                    <div class="card__discount big">
                        <a href="#">{{$val->discount}}%</a>
                    </div>
                @endif
                <p>
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @endif  " class="tur__location">{{$val->name}}</a>
                </p>
                <div class="card__title">
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @endif  ">{{$val->description}}</a>
                </div>
            </div>
        @endforeach
    @endif
        <!--  -->
    @if($popCuponProductCategory != null)
        @foreach($popCuponProductCategory as $val)
            <div class="main__content card_content">
                <div class="card__img">
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @else
                        #
@endif"><img src="./img/popCuponProductImg/{{$val->imageUrl}}" alt=""></a>
                </div>
                @if($val->discount != null)
                    <div class="card__discount big">
                        <a href="#">{{$val->discount}}%</a>
                    </div>
                @endif
                <p>
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @endif  " class="tur__location">{{$val->name}}</a>
                </p>
                <div class="card__title">
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @endif  ">{{$val->description}}</a>
                </div>
            </div>
        @endforeach
    @endif
        @if($allCuponProductCategory)
            @foreach($allCuponProductCategory as $val)
            <div class="main__content card_content">
                <div class="card__img">
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @else
                        #
@endif"><img src="./img/popCuponProductImg/{{$val->imageUrl}}" alt=""></a>
                </div>
                @if($val->discount != null)
                    <div class="card__discount big">
                        <a href="#">{{$val->discount}}%</a>
                    </div>
                @endif
                <p>
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @endif  " class="tur__location">{{$val->name}}</a>
                </p>
                <div class="card__title">
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @endif  ">{{$val->description}}</a>
                </div>
            </div>
        @endforeach
    @endif
    </div>
@endsection

@section('footer')
    @parent
@endsection