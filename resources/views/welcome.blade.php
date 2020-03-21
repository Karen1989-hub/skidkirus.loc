<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>IT-Events</title>
        <link rel="stylesheet" href="{{asset('style/slick.css')}}">
        <link rel="stylesheet" href="{{asset('style/slick-theme.css')}}">
        <link rel="stylesheet" href="{{asset('style/main.css')}}" />
        <link rel="stylesheet" href="{{asset('style/style.css')}}" />
        <link rel="stylesheet" href="{{asset('style/slider.css')}}">
        <link rel="stylesheet" href="{{asset('style/blog.css')}}">
        <link rel="stylesheet" href="{{asset('style/for-businees.css')}}">
        <link rel="stylesheet" href="{{asset('style/how-work.css')}}">


        <link rel="stylesheet" href="https://wave-it.ru/lessons/css/plugin/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/v4-shims.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
    </head>

    <body>
        <div class="wrapper">

            <header id="header">
                <div class="logo">
                    <a href="{{route('home')}}"><img src="./img/SkidkirusLogo.png" alt=""></a>
                </div>

                <nav class="header__menue">

                    <div class="middle__menue">
                        <form action="" method="get" class="middle__form">
                            <input type="text" class="middle__search" placeholder="Search" />

                            <button><img src="./img/white-search-icon.svg" alt="" /></button>


                        </form>
                        <a class="login fancybox" href="#one"> Вход </a>
                        <div id="one" style="display:none">
                            <div class="form">

                                <ul class="tab-group">
                                  <li class="tab active"><a href="#signup">Регистрация</a></li>
                                  <li class="tab"><a href="#login">Вход2</a></li>
                                </ul>

                                <div class="tab-content">
                                  <div id="signup">

                                    <form action="/" method="post">

                                    <div class="top-row">
                                      <div class="field-wrap">
                                        <label>
                                          Имя<span class="req">*</span>
                                        </label>
                                        <input class="field-wrap-input" type="text" required autocomplete="off" />
                                      </div>

                                      <div class="field-wrap">
                                        <label>
                                          Фамилия<span class="req">*</span>
                                        </label>
                                        <input type="text"required autocomplete="off"/>
                                      </div>
                                    </div>

                                    <div class="field-wrap">
                                      <label>
                                        Email<span class="req">*</span>
                                      </label>
                                      <input type="email"required autocomplete="off"/>
                                    </div>

                                    <div class="field-wrap">
                                      <label>
                                        Пароль<span class="req">*</span>
                                      </label>
                                      <input type="password"required autocomplete="off"/>
                                    </div>

                                    <button type="submit" class="button button-block">Зарегистрироваться</button>

                                    </form>

                                  </div>

                                  <div id="login">
                                    <h1 style="    color: white;
                                    ">Добро пожаловать</h1>

                                    <form action="/" method="post">

                                      <div class="field-wrap">
                                      <label>
                                        Email <span class="req">*</span>
                                      </label>
                                      <input type="email"required autocomplete="off"/>
                                    </div>

                                    <div class="field-wrap">
                                      <label>
                                        Пароль<span class="req">*</span>
                                      </label>
                                      <input type="password"required autocomplete="off"/>
                                    </div>


                                    <button class="button button-block">Вход</button>

                                    </form>

                                  </div>

                                </div><!-- tab-content -->

                          </div> <!-- /form -->
                        </div>
                    </div>

                    <div class="bottom__menue">
                        <ul>
                            <li>
                                <a class="link" href="#">Услуги</a>

                                <div class="bottom__links bottom__links-hover">
                                    <div class="links">
                                        <ul>                                           
                                            <li><a href="#">Красота</a></li>
                                            <li><a href="#">Рестораны и кафе</a></li> 
                                            <li><a href="#">Строительство</a></li>
                                            <li><a href="#">Ремонт</a></li>
                                            <li><a href="#">Авто</a></li>
                                            <li><a href="#">Питание</a></li>
                                            <li><a href="#">Евент</a></li>
                                            <li><a href="#">Одежда и аксессуары</a></li>    
                                            <li><a href="#">Дети</a></li>   
                                            <li><a href="#">Разное</a></li>    
                                            <li><a href="#">Техника</a></li>                                                                                   
                                        </ul>                             
                                      
                                
                                    </div>                                  

                                </div>
                            </li>
                            <li>
                                <a class="link" href="#">Отели</a>

                                <div class="bottom__links bottom__links-hover">
                                    <div class="links">
                                        <ul>
                                            <a href="#">
                                                <h3>Россия</h3>
                                            </a>
                                            <li><a href="{{route('getMosskow_hotels')}}">Москва</a></li>
                                        </ul>
                                        <ul>
                                            <a href="#">
                                                <h3>Армения</h3>
                                            </a>
                                            <li><a href="{{route('getErevan_hotels')}}">Ереван</a></li>
                                        </ul>
                                        <ul>
                                            <a href="{{route('getPodmoskowe_hotels')}}">
                                                <h3>Подмосковье</h3>
                                            </a>
                                        </ul>


                                    </div>




                                </div>

                            </li>
                            <li>
                                <a class="link" href="#">Туры </a>

                                <div class="bottom__links bottom__links-hover">
                                    <div class="links">
                                        <ul>
                                            <li><a href="{{route('getAllToursPage')}}">Все</a></li>
                                            <li><a href="{{route('getArmenianTours')}}">Армения</a></li>
                                            <li><a href="{{route('getRussionTours')}}">Россия</a></li>
                                            <li><a href="{{route('getTurkeyTours')}}">Турция</a></li>
                                            <li><a href="{{route('getEuropeTours')}}">Европа</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="link" href="#">Магазины</a>

                                <div class="bottom__links bottom__links-hover">
                                    <div class="links">
                                        <ul>
                                            <li><a href="{{route('getAllShopsPage')}}">Все бренды</a></li>
                                            <li><a href="{{route('getBOMBBARBrend')}}">BOMBBAR</a></li>
                                            <li><a href="{{route('getMODIS_Brend')}}">MODIS</a></li>
                                            <li><a href="{{route('getFiNN_FLARE_Brend')}}">FiNN FLARE</a></li>
                                            <li><a href="{{route('getPampers_Brend')}}">Pampers</a></li>
                                            <li><a href="{{route('getLitres_Brend')}}">ЛитРес</a></li>
                                            <li><a href="{{route('getDomovoy_Brend')}}">Домовой</a></li>
                                            <li><a href="{{route('getBook24_Brend')}}">Book24</a></li>
                                            <li><a href="{{route('getRayton_Brend')}}">Райтон</a></li>
                                            <li><a href="{{route('getLinzmaster_Brend')}}">Линзмастер</a></li>
                                            <li><a href="{{route('getOrmatek_Brend')}}">Орматек</a></li>
                                        </ul>

                                    </div>
                                    <div class="links">
                                        <ul>
                                            <li><a href="{{route('getM_Video_Brend')}}">М.Видео</a></li>
                                            <li><a href="{{route('getTOY_RU_Brend')}}">TOY.RU</a></li>
                                            <li><a href="{{route('getFran_Brend')}}">Фран</a></li>
                                            <li><a href="{{route('getSvaznoy_Brend')}}">Связной</a></li>
                                            <li><a href="{{route('getBronickiyUvelir_Brend')}}">Бронницкий ювелир</a></li>
                                            <li><a href="{{route('getVseInstrumenti_Brend')}}">Все инструменты</a></li>
                                            <li><a href="{{route('getYves_Rocher_Brend')}}">Yves Rocher</a></li>
                                            <li><a href="{{route('getPuma_Brend')}}">Puma</a></li>
                                            <li><a href="{{route('getTheOutlet_Brend')}}">TheOutlet.ru</a></li>
                                            <li><a href="{{route('getSozvezdie_Brend')}}">Созвездие красоты</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><a class="link" href="">Блог</a></li>
                            <li><a class="link" href="{{route('gethowWork')}}">Как работает Skidkirus</a></li>


                             <li>
                                <a class="link" href="#">Кешбэк</a>

                            </li>
                            <li>
                                <a class="link" href="#">Товары по купонам</a>

                                <div class="bottom__links bottom__links-hover">
                                    <div class="links">
                                        <ul>
                                            <li><a href="{{route('getFurnicher_cupon')}}">Мебель и ремонт</a></li>
                                            <li><a href="{{route('getForHome_cupon')}}">Товары для дома</a></li>
                                            <li><a href="{{route('getElectronics_cupon')}}">Бытовая техника и электроника</a></li>
                                            <li><a href="{{route('getHealth_cupon')}}">Здоровье</a></li>
                                            <li><a href="{{route('getFood_cupon')}}">Продукты питания</a></li>
                                            <li><a href="{{route('getBeauty_cupon')}}">Красота</a></li>
                                            <li><a href="{{route('getClothes_cupon')}}">Обувь и одежда</a></li>
                                            <li><a href="{{route('getForChildren_cupon')}}">Товары для детей</a></li>
                                            <li><a href="{{route('getSuvenirs_cupon')}}">Сувенирная продукция</a></li>
                                            <li><a href="{{route('getFlowers_cupon')}}">Цветы</a></li>
                                            <li><a href="{{route('getBalloons_cupon')}}">Воздушные шары</a></li>
                                            <li><a href="{{route('getPlus18_cupon')}}">18+</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>


                </nav>
            </header>

            <div class="contanier">

                <div class="left__menue">
                    <div class="left__menue-title">


                    </div>
                    <ul>
                        <li class="left__links">
                            <img src="./img/icons/1.png" alt="">
                            <a href="">Красота</a>                            
                        </li>                        
                        <li class="left__links">
                            <img src="./img/icons/3.png" alt="">
                            <a href="#">Рестораны и кафе</a>                            
                        </li>
                        <li class="left__links">
                            <img src="./img/icons/4.png" alt="">
                            <a href="#">Строительство</a>                     
                        </li>
                        <li class="left__links">
                            <img src="./img/icons/5.png" alt="">
                            <a href="#">Ремонт</a>                           
                        </li>
                        <li class="left__links">
                            <img src="./img/icons/6.png" alt="">
                            <a href="#">Авто</a>                       
                        </li>
                        <li class="left__links">
                            <img src="./img/icons/3.png" alt="">
                            <a href="#">Питание</a>                            
                        </li>
                        <li class="left__links">
                            <img src="./img/icons/7.png" alt="">
                            <a href="#">Евент</a>
                        </li>
                        <li class="left__links">
                            <img src="./img/icons/8.png" alt="">
                            <a href="#">Одежда и аксессуары</a>
                        </li>
                        <li class="left__links">
                            <img src="./img/icons/9.png" alt="">
                            <a href="">Дети</a>
                        </li>
                        <li class="left__links">
                            <img src="./img/icons/10.png" alt="">
                            <a href="#">Разное</a>                            
                        </li>
                        <li class="left__links">
                            <img src="./img/icons/11.png" alt="">
                            <a href="#">Техника</a>
                        </li>
                    </ul>
                    <div class="burger "><img src="./img/burger.svg" alt=""></div>
                </div>

                <a href="#header" class="go__top"></a>
                <div class="slider__contanier">
                    <div class="auto__slider">
                        <div class="slider-items"></div>
                        <div class="slider-items"></div>
                        <div class="slider-items"></div>
                    </div>
                </div>

                <!-- navbar end -->
                <div class="contanier__menue-title hotel__title">
                    <a href="{{route('getAllSkidkisPage')}}" id="menue__title">Скидки</a>
                    <a href="{{route('getAllSkidkisPage')}}" id="menue__title-info">ВСЕ </a>
                </div>
                <div class="cards w-75">
                    <!-- card start -->
                    @foreach($skidki as $val)
                    <div class="main__content">
                        <div class="card__img sites">
                            <a target="_blank" href="
                            @if($val->sitesUrl != null)
                            {{$val->sitesUrl}}
                                @else
                                #
                                @endif
                                "><img src="img/skidkiImg/{{$val->imageUrl}}" alt=""></a>
                            @if($val->discount != null)
                            <div class="card__discount big">
                                <a href="#">{{$val->discount}}%</a>
                            </div>
                            @endif
                            @if($val->marker != null)
                            <div class="card__holidays">
                                <a href="#">{{$val->marker}}</a>
                            </div>
                            @endif

                        </div>
                        <div class="card__title">
                            <a href="#">{{$val->description}}</a>
                        </div>
                        <div class="card__lcation">
                            <span class="metro">{{$val->name}}</span>
                            <span class="shop">Вход {{$val->count}}</span>
                        </div>

                        <div class="card_price">
                            <a href="#" class="old__price">{{$val->oldPrice}} руб.</a>
                            <a href="#" class="new__price">{{$val->newPrice}} руб.</a>
                        </div>
                    </div>
                    @endforeach
                    <!-- card end -->



                    <div class="contanier__menue-title hotel__title">
                        <a href="{{route('getAllSitesPage')}}" id="menue__title">Сайты</a>
                        <a href="{{route('getAllSitesPage')}}" id="menue__title-info">ВСЕ </a>
                    </div>
                      <!-- Swiper -->
                      <div class="swiper-container">
                        <div class="swiper-wrapper">
                        @foreach($sites as $val)
                                <div class="swiper-slide main__content">
                                    <div class="card__img sites" >
                                        <a target="_blank" href="{{$val->sitesUrl}}"><img src="{{$val->imageUrl}}" alt=""></a>
                                        @if($val->discount != null)
                                            <div class="card__discount small">
                                                <a href="#">{{$val->discount}}%</a>

                                            </div>
                                        @endif
                                        @if($val->marker != null)
                                            <div class="card__holidays">
                                                <a href="#">{{$val->marker}}</a>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card__title">
                                        <a href="#">{{$val->description}}</a>
                                    </div>


                                    <div class="card__lcation">
                                        <span class="metro">{{$val->name}}</span>
                                        <span class="shop">Вход {{$val->count}}</span>
                                    </div>
                                    <div class="card_price">
                                        <a href="#" class="old__price">{{$val->oldPrice}} руб.</a>
                                        <a href="#" class="new__price">{{$val->newPrice}} руб.</a>
                                    </div>
                                </div>
                        @endforeach





                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->

                      </div>

                      <!-- Swiper JS -->
                      <script src="../package/js/swiper.min.js"></script>

                      <!-- Initialize Swiper -->
                      <script>
                        var swiper = new Swiper('.swiper-container', {
                          slidesPerView: 3,
                          spaceBetween: 30,
                          slidesPerGroup: 3,
                          loop: true,
                          loopFillGroupWithBlank: true,
                          pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                          },
                          navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                          },
                        });
                      </script>


                </div>

                <div class="cards__bg cards__bg-product">
                    <div class="cards__bg-title">
                        <div class="contanier__menue-title bg__title">
                            <a href="{{route('getAllRestoranPage')}}" id="menue__title">Популярные рестораны </a>
                            <a href="{{route('getAllRestoranPage')}}" id="menue__title-info">ВСЕ </a>
                        </div>
                    </div>
                    <div class="cards services">


                     @foreach($popRestoran as $val)
                        <div class="main__content">
                            <div class="card__img popRestoran">
                                <a target="_blank" href="{{$val->sitesUrl}}"><img class="restoranImg" style="margin-left:10px" src="img/popRestoranImg/{{$val->imageUrl}}" alt=""></a>
                                @if($val->discount != null)
                                <div class="card__discount big">
                                    <a href="#">{{$val->discount}}%</a>
                                </div>
                                @endif
                               @if($val->marker != null)
                                <div class="card__holidays">
                                    <a href="#">{{$val->marker}}</a>
                                </div>
                                @endif

                            </div>
                            <div class="card__title">
                                <a href="#">{{$val->description}}</a>
                            </div>
                            <div class="card__lcation">
                                <span class="metro">{{$val->name}}</span>
                                <span class="shop">Вход {{$val->count}}</span>
                            </div>
                            <div class="card_price">
                                <a href="#" class="old__price">{{$val->oldPrice}} руб.</a>
                                <a href="#" class="new__price">{{$val->newPrice}} руб.</a>
                            </div>
                        </div>
                    @endforeach

                    </div>
                </div>

                <div class="contanier__menue-title hotel__title">
                    <a href="{{route('getAllHotelPage')}}" id="menue__title">Отели</a>
                    <a href="{{route('getAllHotelPage')}}" id="menue__title-info">ВСЕ </a>
                </div>
                <div class="cards__bg">
                    <section class="slider">
                        @foreach($popHotel as $val)

                            <a href="{{$val->sitesUrl}}"><img class="hotel__slider-img slick-slide slick-active" src="./img/popHotelImg/{{$val->popHotelImg}}">
                                <div style="margin-left: 20px"><span>{{$val->name}}</span><br>
                                    {{$val->description}}</div>

                            </a>

                        @endforeach
                    </section>
                </div>



                <div class="contanier__menue-title tur__title">
                    <a href="{{route('getAllToursPage')}}" id="menue__title">Туры</a>
                    <a href="{{route('getAllToursPage')}}" id="menue__title-info">ВСЕ </a>
                </div>

                <div class="cards tur w-75">
{{--                    start--}}
                    @foreach($PopTour as $val)
                    <div class="main__content tur__content">
                        <div class="card__img tur__img">
                            <img src="./img/popToursImg/{{$val->nameImg}}" alt="">
                            <div class="tur__information">
                                <a href="@if($val->sitesUrl != "" && $val->sitesUrl!=null)
                                {{$val->sitesUrl}}
                                @endif  " class="tur__location">{{$val->name}}</a>
                                <a href="{{$val->sitesUrl}}" class="tur__suggestions">{{$val->info}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach             
                </div>


                <div class="contanier__menue-title">
                    <a href="{{route('getAllCuponProductPage')}}" id="menue__title">Товары по купонам </a>
                    <a href="{{route('getAllCuponProductPage')}}" id="menue__title-info">ВСЕ </a>
                </div>

                <div class="cards w-75">

                @foreach($PopCuponProduct as $val)
                    <div class="main__content popProductCupon" >
                        <div class="card__img">
                            <img src="./img/popCuponProductImg/{{$val->imageUrl}}" alt="">
                            @if($val->discount != null)
                                <div class="card__discount big">
                                    <a href="{{$val->sitesUrl}}">{{$val->discount}}%</a>

                                </div>
                            @endif


                        </div>
                        <div class="card__title">
                            <a href="{{$val->sitesUrl}}">{{$val->description}}</a>
                        </div>
                        <div class="card__lcation">
                            <span class="metro">{{$val->name}}</span>
                            <span class="shop">Куплено {{$val->count}}</span>
                        </div>
                        <div class="card_price">
                            <a href="#" class="old__price">{{$val->oldPrice}} руб.</a>
                            <a href="#" class="new__price">{{$val->newPrice}} руб.</a>
                        </div>
                    </div>
                @endforeach



                </div>



                <div class="cards__bg cards__bg-stores">
                    <div class="contanier__menue-title">
                        <a href="{{route('getAllShopsPage')}}" id="menue__title">Популярные магазины </a>
                        <a href="{{route('getAllShopsPage')}}" id="menue__title-info">ВСЕ </a>
                    </div>
                    <section class="slider">
                        @foreach($popShop as $val)

                        <a href="{{$val->sitesUrl}}"><img class="hotel__slider-img slick-slide slick-active" src="./img/popShop/{{$val->imageUrl}}">
                           <div style="margin-left: 20px"><span>{{$val->name}}</span><br>
                               {{$val->description}}</div>

                        </a>

                        @endforeach
                    </section>
                </div>

            </div>

            <footer class="footer pd_0" id="footer">
                <div class="footer_frstpart footer_blog">
                    <div class=" footer_menu_blog">
                        <div class="foot1">
                            <div class="footer_contact">
                                <a href="#" class="phone">+79150238800</a>
                                <p class="contact_description">
                                    Для звонка из Москвы<br>
                                    и регионов России
                                </p>
                                <a href="#" class="btn-contact">Связаться с нами</a>
                            </div>

                            <div class="menu_block">
                                <div class="menu_block_header">Компания</div>
                                <ul class="blaock_header_link_list">
                                    <li>
                                        <a href="{{route('gethowWork')}}">Как работает Skidkirus</a>
                                    </li>

                                    <li>
                                        <a href="#">Вакансии</a>
                                    </li>
                                    <li>
                                        <a href="#">Блог</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="foot2">
                            <div class="menu_block">
                                <div class="menu_block_header">Информация</div>
                                <ul class="blaock_header_link_list">
                                    <li>
                                        <a href="#">Вопросы и ответы</a>
                                    </li>
                                    <li>
                                        <a href="#" >Отзывы</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu_block last_block">
                                <div class="menu_block_header">Партнерам</div>
                                <ul class="blaock_header_link_list">
                                    <li>
                                        <a href="#" >Для Вашего бизнеса</a>

                                    </li>
                                    <li>
                                        <a href="#">Франчайзинг</a>

                                    </li>
                                    <li>
                                        <a href="#">Партнёрская программа</a>

                                    </li>
                                    <li>
                                        <a href="#">Все акции</a>

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=" footer_info footer_info_blog">
                        <div class="frst_sect">
                            <div class="footer_info_left">
                                <p class="copyright"> © 2015-2020  </p>
                                <ul class="links">
                                    <li><a href="#">Обработка персональных данных</a></li>
                                    <li><a href="#">Пользовательское соглашение</a></li>
                                    <li><a href="#">Публичная оферта</a></li>
                                </ul>
                            </div>

                            <div class="footer_info_center">

                                <div class="icons_info">
                                    <i class="fas fa-shield-alt"></i>

                                    <i class="fas fa-lock"></i>
                                </div>


                                <p class="text"> Гарантия, поддержка<br>24 часа и возврат средств </p>
                            </div>
                        </div>
                        <div class="footer_info_right">

                            <div class="social my-2">
                                <ul class="d-flex justiofy-content-center ">
                                    <li class="mx-2">
                                        <a href="https://www.facebook.com/it.wave.it/" target="_blank" >
                                            <div class="soc_div facebook">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mx-2">
                                        <a href="https://www.instagram.com/wave_it.ru/" target="_blank">
                                            <div class="soc_div inst">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </div>
                                        </a>

                                    </li>
                                    <li class="mx-2">
                                        <a href="https://vk.com/it_wave_it" target="_blank">
                                            <div class="soc_div vk">
                                                <i class="fa fa-vk" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="{{asset('src/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('src/slick.min.js')}}"></script>
        <script src="{{asset('src/script.js')}}"></script>
        <script src="{{asset('src/slider.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

        <script>

$(document).ready(function() {
    $("a.fancybox").fancybox()
  });
        </script>

    </body>

</html>
