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
            <a href="{{route('getBeauty')}}"><div>Красота</div></a>
            <a href="{{route('getServicRestorans')}}"><div class="activPage">Рестораны и кафе</div></a>
            <a href="{{route('getServicConstruction')}}"><div>Строительство</div></a>
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

</div>
<!-- nav menu end -->

<!-- controler panel -->
<div class="col-sm-8 col-lg-9 border">
<h2>Рестораны и кафе</h2>

    <!-- Material form login -->
    <div class="cards">

        @foreach($servicRestoran as $val)
            <div class="adminsBlokLists">
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="slide"><img src="img/servicRestorans/{{$val->nameImg}}" alt=""></div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <button type="button" class="btn btn-success servicesUpdate">Изменить</button>
                        <form action="{{route('deleteServicRestorans')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$val->id}}"> 
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>

                    </div>
                </div>
                <div class="updatePanel">
                    <form action="{{route('updateServicRestorans')}}" method="post" enctype='multipart/form-data'>
                        @csrf
                        <input type="hidden" name="id" value="{{$val->id}}">
                        <div class="form-row">
                            
                            <div class="col-lg-6 col-sm-12">
                                <span>описание</span>
                                <input type="text" class="form-control" placeholder="{{$val->description}}" name="description">
                                @if($errors->has('description'))
                                <span class='inpError'>{{$errors->first('description')}}</span>
                                 @endif   
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <span>имя</span>
                                <input type="text" class="form-control" placeholder="{{$val->name}}" name="name">
                                @if($errors->has('name'))
                             <span class='inpError'>{{$errors->first('name')}}</span>
                              @endif    
                            </div>
                           
                            
                           
                            <div class="col-lg-6 col-sm-12">
                                <span>адрес сайта</span>
                                <input type="text" class="form-control" placeholder="{{$val->sitesUrl}}" name="sitesUrl">
                                @if($errors->has('sitesUrl'))
                                 <span class='inpError'>{{$errors->first('sitesUrl')}}</span>
                                 @endif  
                            </div>
                            <div class="col-lg-6 col-sm-12">
                               
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Загрузить</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="nameImg" class="custom-file-input" id="inputGroupFile01"
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
    <form class="text-center" style="color: #757575;" action="{{route('setServicRestorans')}}" method="post" enctype='multipart/form-data'>
    @csrf
      <div class="md-form">
        <label for="materialLoginFormPassword">имя</label>
        <input type="text" name="name" id="materialLoginFormPassword" class="form-control">
        @if($errors->has('name'))
            <span class='inpError'>{{$errors->first('name')}}</span>
        @endif    
      </div>
          
      <div class="md-form">
        <label for="materialLoginFormPassword">описание</label>
        <input type="text" name="description" id="materialLoginFormPassword" class="form-control">
        @if($errors->has('description'))
            <span class='inpError'>{{$errors->first('description')}}</span>
        @endif   
      </div>        

      <div class="md-form">
        <label for="materialLoginFormPassword">URL сайта</label>
        <input type="text" name="sitesUrl" id="materialLoginFormPassword" class="form-control">
        @if($errors->has('sitesUrl'))
            <span class='inpError'>{{$errors->first('sitesUrl')}}</span>
        @endif   
      </div>


      <!-- input file -->
      <div class="input-group">
         <div class="input-group-prepend">
         <span class="input-group-text" id="inputGroupFileAddon01">Загрузить</span>
        </div>
         <div class="custom-file">
         <label class="custom-file-label" for="inputGroupFile01">Выберите файл</label>
         <input type="file" name="nameImg" class="custom-file-input" id="inputGroupFile01"
           aria-describedby="inputGroupFileAddon01">     
                       
            </div>            
      </div>
      @if($nameImgError != null)
      <strong class='inpError'>{{$nameImgError}}</strong>
      @endif


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