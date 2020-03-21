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


    
    <div class="cards allTours" style="margin-bottom: 50px">
    @if($popShop != null)
        @foreach($popShop as $val)
            <div class="main__content card_content">
                <div class="card__img">
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @else
                        #
                @endif"><img src="./img/popShop/{{$val->imageUrl}}" alt=""></a>
                </div>               
                <p>
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @endif  " class="tur__location">{{$val->name}}</a>
                </p>
                <div class="card__title" style="width:200px">
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @endif  ">{{$val->description}}</a>
                </div>
            </div>
        @endforeach
        @endif

        @if($allShopsPage != null)
        @foreach($allShopsPage as $val)
            <div class="main__content card_content">
                <div class="card__img">
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @else
                        #
                @endif"><img src="./img/popShop/{{$val->imageUrl}}" alt=""></a>
                </div>               
                <p>
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @endif  " class="tur__location">{{$val->name}}</a>
                </p>
                <div class="card__title" style="width:200px">
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @endif  ">{{$val->description}}</a>
                </div>
            </div>
        @endforeach
        @endif

        @if($popShopsCategory != null)
        @foreach($popShopsCategory as $val)
            <div class="main__content card_content">
                <div class="card__img">
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @else
                        #
                @endif"><img src="./img/popShop/{{$val->imageUrl}}" alt=""></a>
                </div>               
                <p>
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @endif  " class="tur__location">{{$val->name}}</a>
                </p>
                <div class="card__title" style="width:200px">
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @endif  ">{{$val->description}}</a>
                </div>
            </div>
        @endforeach
        @endif

        @if($allShopsCategory != null)
        @foreach($allShopsCategory as $val)
            <div class="main__content card_content">
                <div class="card__img">
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @else
                        #
                @endif"><img src="./img/popShop/{{$val->imageUrl}}" alt=""></a>
                </div>               
                <p>
                    <a href="@if($val->sitesUrl != '' && $val->sitesUrl!=null)
                    {{$val->sitesUrl}}
                    @endif  " class="tur__location">{{$val->name}}</a>
                </p>
                <div class="card__title" style="width:200px">
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
