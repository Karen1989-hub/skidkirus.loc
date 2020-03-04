@extends('layout.adminMaket')
@section('header')
    @parent
@endsection
@section('content')
    <div class="row">

        <!-- nav menu  -->
        <div class="col-sm-4 col-lg-3 border">
            <h2>Меню</h2>
            <div class="list-group">

                <div class="nav">
                    <div class="big" id="null">
                        <div class="menuHeading">Топ объявление</div>
                        <a href="{{route('adminPage')}}"><div>Скидки</div></a>
                        <a href="{{route('setSitsPage')}}"><div>Сайты</div></a>
                        <a href="{{route('getPopularRestoran')}}"><div>Популярные рестораны</div></a>
                        <a href="{{route('getPopHotel')}}"><div>Отели</div></a>
                        <a href="{{route('getPopTours')}}"><div>Туры</div></a>
                        <a href="{{route('getPopCuponProduct')}}"><div>Товары по купонам</div></a>
                        <a href="{{route('getPopShop')}}"><div>Популярные магазины</div></a>

                    </div>
                    <div class="big" id="null1">
                        <div class="menuHeading1">Другие объявление</div>
                        <a href="{{route('getAllTours')}}"><div class="activPage">Все туры</div></a>
                        <div>text</div>
                        <div>text</div>
                    </div>
                </div>
            </div>

        </div>
        <!-- nav menu end -->

        <!-- controler panel -->
        <div class="col-sm-8 col-lg-9 border">
            <h2>Все туры</h2>

            <!-- Material form login -->
            <div class="cards">

                @foreach($allTours as $val)
                    <div class="adminsBlokLists">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="slide"><img src="img/allTours/{{$val->nameImg}}" alt=""></div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <button type="button" class="btn btn-success" id="allToursUpdate">Изменить</button>
                                <form action="{{route('deleteAllTours')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$val->id}}">
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </form>

                            </div>
                        </div>
                        <div class="updatePanel">
                            <form action="{{route('updateAllTours')}}" method="post" enctype='multipart/form-data'>
                                @csrf
                                <input type="hidden" name="id" value="{{$val->id}}">
                                <div class="form-row">

                                    <div class="col-lg-6 col-sm-12">
                                        <span>описание</span>
                                        <input type="text" class="form-control" placeholder="{{$val->info}}" name="description">
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <span>имя</span>
                                        <input type="text" class="form-control" placeholder="{{$val->name}}" name="name">
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <span>страна тура(по русский)</span>
                                        <input type="text" class="form-control" placeholder="{{$val->toursCountry}}" name="toursCountry">
                                    </div>




                                    <div class="col-lg-6 col-sm-12">
                                        <span>адрес сайта</span>
                                        <input type="text" class="form-control" placeholder="{{$val->sitesUrl}}" name="sitesUrl">
                                    </div>
                                    <div class="col-lg-6 col-sm-12">

                                        <span>Загрузить</span>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Загрузить</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="allToursImg" class="custom-file-input" id="inputGroupFile01"
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
            <div class="card  w-75 formBlock">

                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Параметры нового слота</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5 pt-0 formBg">

                    <!-- Form -->
                    <form class="text-center" style="color: #757575;" action="{{route('setAllTours')}}" method="post" enctype='multipart/form-data'>
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
                            <input type="text" name="sitesUrl" id="materialLoginFormPassword" class="form-control">
                            <label for="materialLoginFormPassword">URL сайта</label>
                        </div>

                        <div class="md-form">
                            <input type="text" name="toursCountry" id="materialLoginFormPassword" class="form-control">
                            <label for="materialLoginFormPassword">страна тура(по русский)</label>
                        </div>

                    {{--      <div class="md-form">--}}
                    {{--        <input type="text" name="imageUrl" id="materialLoginFormPassword" class="form-control">--}}
                    {{--        <label for="materialLoginFormPassword">URL картинки</label>--}}
                    {{--      </div>--}}

                    <!-- input file -->
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Загрузить</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="allToursImg" class="custom-file-input" id="inputGroupFile01"
                                       aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Выберите файл(обязательно)</label>
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
