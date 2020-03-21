@extends('layout.adminMaket')
@section('header')
    @parent
@endsection
@section('content')
    <div class="row">

        <!-- nav menu  -->
        <div class="col-sm-4 col-lg-3 border">
            <h2>Меню</h2>
            

            <div class="nav">
                <div class="big" id="null">
                    <div class="menuHeading">Топ объявление</div>
                    <a href="{{route('adminPage')}}"><div>Скидки</div></a>
                    <a href="{{route('setSitsPage')}}"><div>Сайты</div></a>
                    <a href="{{route('getPopularRestoran')}}"><div>Популярные рестораны</div></a>
                    <a href="{{route('getPopHotel')}}"><div class="activPage">Отели</div></a>
                    <a href="{{route('getPopTours')}}"><div>Туры</div></a>
                    <a href="{{route('getPopCuponProduct')}}"><div>Товары по купонам</div></a>
                    <a href="{{route('getPopShop')}}"><div>Популярные магазины</div></a>
                </div>
                <div class="big" id="null1">
                    <div class="menuHeading1">Другие объявление</div>
                    <a href="{{route('getAllSkidkis')}}"><div>Все Скидки</div></a>
            <a href="{{route('getAllSites')}}"><div>Все Сайты</div></a>
            <a href="{{route('getAllRestoran')}}"><div>Все рестораны</div></a>
            <a href="{{route('getAllHotel')}}"><div>Все Отели</div></a>
            <a href="{{route('getAllTours')}}"><div>Все туры</div></a>
            <a href="{{route('getAllCuponProduct')}}"><div>Все Товары по купонам</div></a>
            <a href="{{route('getAllShop')}}"><div>Все магазины</div></a>          
                </div>
                <div class="big" id="null2">
            <div class="menuHeading2">Услуги</div>
            <a href="#"><div>Красота</div></a>
            <a href="{{route('getAllSites')}}"><div>Рестораны и кафе</div></a>
            <a href="{{route('getAllRestoran')}}"><div>Строительство</div></a>
            <a href="{{route('getAllHotel')}}"><div>Ремонт</div></a>
            <a href="{{route('getAllTours')}}"><div>Авто</div></a>
            <a href="{{route('getAllCuponProduct')}}"><div>Питание</div></a>
            <a href="{{route('getAllShop')}}"><div>Евент</div></a>
            <a href="{{route('getAllShop')}}"><div>Одежда и аксессуары</div></a> 
            <a href="{{route('getAllShop')}}"><div>Дети</div></a> 
            <a href="{{route('getAllShop')}}"><div>Разное</div></a> 
            <a href="{{route('getAllShop')}}"><div>Техника</div></a>             
        </div>
            </div>
        </div>
        <!-- nav menu end -->

        <!-- controler panel -->
        <div class="col-sm-8 col-lg-9 border">
            <h2>Топ отели</h2>

            <!-- Material form login -->
            <div class="cards">
                @foreach($popHotel as $val)
                    <div class="adminsBlokLists">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="slide"><img src="img/popHotelImg/{{$val->popHotelImg}}" alt=""></div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <button type="button" class="btn btn-success" id="popHotelUpdate">Изменить</button>
                                <form action="{{route('deleteSitsList')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$val->id}}">
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </form>

                            </div>
                        </div>
                        <div class="updatePanel">
                            <form action="{{route('updatePopHotel')}}" method="post" enctype='multipart/form-data'>
                                @csrf
                                <input type="hidden" name="id" value="{{$val->id}}">
                                <div class="form-row">
                                    <div class="col-lg-6 col-sm-12">
                                        <span>описание</span>
                                        <input type="text" class="form-control" placeholder="{{$val->description}}" name="description">
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <span>имя</span>
                                        <input type="text" class="form-control" placeholder="{{$val->name}}" name="name">
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <span>страна</span>
                                        <input type="text" class="form-control" placeholder="{{$val->brend}}" name="country">
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <span>адрес сайта</span>
                                        <input type="text" class="form-control" placeholder="{{$val->sitesUrl}}" name="sitesUrl">
                                    </div>

                                    <!--<div class="col-lg-6 col-sm-12">
                                        <span>адрес сайта</span>
                                        <input type="text" class="form-control" placeholder="{{$val->sitesUrl}}" name="sitesUrl">
                                    </div>-->
                                    <div class="col-lg-6 col-sm-12">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Загрузить</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="popHotelImg" class="custom-file-input" id="inputGroupFile01"
                                                       aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Выберите файл</label>
                                            </div>
                                        </div>


                                        <button type="submit" class="btn btn-success">сохранить</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                @endforeach
            </div>

            <!-- Material form login -->
            <div class="card w-75 formBlock">

                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Параметры нового слота</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5 pt-0 formBg">

                    <!-- Form -->
                    <form class="text-center" style="color: #757575;" action="{{route('setPopHotel')}}" method="post" enctype='multipart/form-data'>
                    @csrf

                        <div class="md-form">
                            <input type="text" name="description" id="materialLoginFormPassword" class="form-control">
                            <label for="materialLoginFormPassword">описание</label>
                        </div>

                        <div class="md-form">
                            <input type="text" name="name" id="materialLoginFormPassword" class="form-control">
                            <label for="materialLoginFormPassword">имя</label>
                        </div>

                        <div class="md-form">
                            <input type="text" name="country" id="materialLoginFormPassword" class="form-control">
                            <label for="materialLoginFormPassword">город</label>
                        </div>

                        <div class="md-form">
                            <input type="text" name="sitesUrl" id="materialLoginFormPassword" class="form-control">
                            <label for="materialLoginFormPassword">URL сайта</label>
                        </div>
                    <!-- input file -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Загрузить</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="popHotelImg" class="custom-file-input" id="inputGroupFile01"
                                       aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Выберите файл</label>
                            </div>
                        </div>

                        <!-- Sign in button -->
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">создать</button>


                    </form>
                    <!-- Form -->

                </div>

            </div>

        </div>
        <!-- controler panel end-->



    </div>

@endsection
@section('footer')
    @parent
@endsection

