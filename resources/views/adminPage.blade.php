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
  <a href="{{route('adminPage')}}" class="list-group-item list-group-item-action active">Скидки</a>
  <a href="{{route('setSitsPage')}}" class="list-group-item list-group-item-action">Сайты</a>
  <a href="" class="list-group-item list-group-item-action">Популярные рестораны</a>
  <a href="" class="list-group-item list-group-item-action">Отели</a>
  <a href="" class="list-group-item list-group-item-action">Туры</a>
  <a href="" class="list-group-item list-group-item-action">Товары по купонам</a>
  <a href="" class="list-group-item list-group-item-action">Популярные магазины</a>  
</div>
</div>
<!-- nav menu end -->

<!-- controler panel -->
<div class="col-sm-8 col-lg-9 border">
<h2>Панел скидок</h2>

<!-- Material form login -->
<div class="card  w-75 formBlock">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Параметры нового слота</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0 formBg">

    <!-- Form -->
    <form class="text-center" style="color: #757575;" action="{{route('setSkidki')}}" method="post" enctype='multipart/form-data'>
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

      <!-- input file -->
      <div class="input-group">
         <div class="input-group-prepend">
         <span class="input-group-text" id="inputGroupFileAddon01">Загрузить</span>
        </div>
         <div class="custom-file">
         <input type="file" name="imgName" class="custom-file-input" id="inputGroupFile01"
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
   <!-- aystex linelu e carder@ -->
 </div>

</div>
<!-- controler panel end-->

</div>
 

@endsection
@section('footer')
@parent
@endsection

