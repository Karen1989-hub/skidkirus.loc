@extends('layout.adminMaket')
@section('header')
@parent
@endsection
@section('content')
<div class="row">

<!-- nav menu  -->
<div class="col-sm-4 col-lg-3 border">
<h2>Меню</h2>
{{--<div class="list-group">--}}
{{--  <a href="{{route('adminPage')}}" class="list-group-item list-group-item-action">Скидки</a>--}}
{{--  <a href="{{route('setSitsPage')}}" class="list-group-item list-group-item-action">Сайты</a>--}}
{{--  <a href="{{route('getPopularRestoran')}}" class="list-group-item list-group-item-action active">Популярные рестораны</a>--}}
{{--  <a href="" class="list-group-item list-group-item-action">Отели</a>--}}
{{--  <a href="" class="list-group-item list-group-item-action">Туры</a>--}}
{{--  <a href="" class="list-group-item list-group-item-action">Товары по купонам</a>--}}
{{--  <a href="" class="list-group-item list-group-item-action">Популярные магазины</a>--}}
{{--</div>--}}

    <div class="nav">
        <div class="big" id="null">
            <div class="menuHeading">Топ объявление</div>
            <a href="{{route('adminPage')}}"><div>Скидки</div></a>
            <a href="{{route('setSitsPage')}}"><div>Сайты</div></a>
            <a href="{{route('getPopularRestoran')}}"><div class="activPage">Популярные рестораны</div></a>
            <a href="{{route('getPopHotel')}}"><div>Отели</div></a>
        </div>
        <div class="big" id="null1">
            <div class="menuHeading1">Другие объявление</div>
            <div>text</div>
            <div>text</div>
            <div>text</div>
        </div>
    </div>
</div>
<!-- nav menu end -->

<!-- controler panel -->
<div class="col-sm-8 col-lg-9 border">
<h2>Популярные рестораны</h2>

<!-- Material form login -->
<div class="card  w-75 formBlock">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Параметры нового слота</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0 formBg">

    <!-- Form -->
    <form class="text-center" style="color: #757575;" action="{{route('setPopRestoran')}}" method="post" enctype='multipart/form-data'>
    @csrf
      <!-- skidka -->
      <div class="md-form">
        <input type="text" name="discount" id="materialLoginFormEmail" class="form-control">
        <label for="materialLoginFormEmail">скидка</label>
      </div>

      <!-- marker -->
      <div class="md-form">
        <input type="text" name="marker" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">маркер</label>
      </div>

      <div class="md-form">
        <input type="text" name="description" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">описание</label>
      </div>

      <div class="md-form">
        <input type="text" name="name" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">имя</label>
      </div>

      <div class="md-form">
        <input type="text" name="count" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">каличество покупок</label>
      </div>

      <div class="md-form">
        <input type="text" name="oldPrice" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">старая цена</label>
      </div>

      <div class="md-form">
        <input type="text" name="newPrice" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">новая цена</label>
      </div>

      <div class="md-form">
        <input type="text" name="sitesUrl" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">URL сайта</label>
      </div>

{{--      <div class="md-form">--}}
{{--        <input type="text" name="imageUrl" id="materialLoginFormPassword" class="form-control">--}}
{{--        <label for="materialLoginFormPassword">URL картинки</label>--}}
{{--      </div>--}}

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Загрузить</span>
            </div>
            <div class="custom-file">
                <input type="file" name="imgName2" class="custom-file-input" id="inputGroupFile01"
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
<!-- Material form login -->
 <div class="cards">
    @foreach($popRestoran as $val)
    <div class="adminsBlokLists">
        <div class="row">
        <div class="col-sm-12 col-lg-6">
         <div class="slide"><img src="img/popRestoranImg/{{$val->imageUrl}}" alt=""></div>
        </div>
        <div class="col-sm-12 col-lg-6">
         <button type="button" class="btn btn-success">Изменить</button>
         <form action="{{route('deletePopRestoran')}}" method="post" >
         @csrf
         <input type="hidden" name="id" value="{{$val->id}}">
         <button type="submit" class="btn btn-danger">Удалить</button>
         </form>

        </div>
        </div>
        <div class="updatePanel">
        <form action="{{route('updatePopRestoran')}}" method="post" enctype='multipart/form-data'>
          @csrf
          <input type="hidden" name="id" value="{{$val->id}}">
          <div class="form-row">
           <div class="col-lg-6 col-sm-12">
               <span>скидка</span>
            <input type="text"  class="form-control" id="email" placeholder="{{$val->discount}}" name="discount">
           </div>
           <div class="col-lg-6 col-sm-12">
               <span>маркер</span>
            <input type="text" class="form-control" placeholder="{{$val->marker}}" name="marker">
           </div>
            <div class="col-lg-6 col-sm-12">
                <span>описание</span>
            <input type="text" class="form-control" placeholder="{{$val->description}}" name="description">
           </div>
            <div class="col-lg-6 col-sm-12">
                <span>имя</span>
            <input type="text" class="form-control" placeholder="{{$val->name}}" name="name">
           </div>
            <div class="col-lg-6 col-sm-12">
                <span>каличество покупок</span>
            <input type="text" class="form-control" placeholder="{{$val->count}}" name="count">
           </div>
            <div class="col-lg-6 col-sm-12">
                <span>старая цена</span>
            <input type="text" class="form-control" placeholder="{{$val->oldPrice}}" name="oldPrice">
           </div>
            <div class="col-lg-6 col-sm-12">
                <span>новая цена</span>
            <input type="text" class="form-control" placeholder="{{$val->newPrice}}" name="newPrice">
           </div>
            <div class="col-lg-6 col-sm-12">
                <span>адрес сайта</span>
            <input type="text" class="form-control" placeholder="{{$val->sitesUrl}}" name="sitesUrl">
           </div>
              <div class="col-lg-6 col-sm-12">
{{--                  <input type="text" class="form-control" placeholder="адрес картинки" name="imageUrl">--}}

                  <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Загрузить</span>
                      </div>
                      <div class="custom-file">
                          <input type="file" name="imgName3" class="custom-file-input" id="inputGroupFile01"
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

</div>
<!-- controler panel end-->

</div>

@endsection
@section('footer')
@parent
@endsection

