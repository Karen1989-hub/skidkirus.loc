@section('header')
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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/v4-shims.css">
    <link rel="stylesheet" href="https://wave-it.ru/lessons/css/plugin/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
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
                        <form action="{{route('searchPages')}}" method="get" class="middle__form">
                            <input type="text" name="name" class="middle__search" placeholder="Search" />

                            <button type="submit"><img src="./img/white-search-icon.svg" alt="" /></button>
                        </form>
                <a class="login fancybox" href="#one"> Вход </a>
                <div id="one" style="display:none">
                    <div class="form">

                        <ul class="tab-group">
                            <li class="tab active"><a href="#signup">Регистрация</a></li>
                            <li class="tab"><a href="#login">Вход</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="signup">

                                <form action="/" method="post">

                                    <div class="top-row">
                                        <div class="field-wrap">
                                            <label>
                                                Имя<span class="req">*</span>
                                            </label>
                                            <input type="text" required autocomplete="off" />
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
                                <h1>Добро пожаловать</h1>

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

                                    <p class="forgot"><a href="#">Forgot Password?</a></p>

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
                                            <li><a href="{{route('getBeautysPage')}}">Красота</a></li>
                                            <li><a href="{{route('getServicRestoranPage')}}">Рестораны и кафе</a></li> 
                                            <li><a href="{{route('getServicConstructionPage')}}">Строительство</a></li>
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
                    
                    <li><a class="link" href="#">Блог</a></li>
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
    @show

    @section('menu')
    <div class="contanier">

        <div class="left__menue">
            <div class="left__menue-title">


            </div>
            <ul>
                <li class="left__links">
                    <img src="./img/icons/1.png" alt="">
                    <a href="#">Красота</a>
                    <ul class="left__submenue">

                        <li><a href="#">Уход за волосами</a></li>
                        <li><a href="#">Барбершопы</a></li>
                        <li><a href="#">Эпиляция</a></li>
                        <li><a href="#">Косметология</a></li>
                        <li><a href="#">SPA, массаж</a></li>
                        <li><a href="#">Маникюр, педикюр</a></li>
                        <li><a href="#">Коррекция фигуры</a></li>
                        <li><a href="#">Другое</a></li>
                    </ul>
                </li>
                <li class="left__links">
                    <img src="./img/icons/2.png" alt="">
                    <a href="#">Здоровье</a>
                    <ul class="left__submenue">

                        <li><a href="#">Стоматология</a></li>
                        <li><a href="#">Диагностика, обследование</a></li>
                        <li><a href="#">Коррекция зрения</a></li>
                        <li><a href="#">Другое</a></li>
                    </ul>
                </li>
                <li class="left__links">
                    <img src="./img/icons/3.png" alt="">
                    <a href="#">Рестораны и кафе</a>

                    <ul class="left__submenue">

                        <li><a href="#">Рестораны</a></li>
                        <li><a href="#">Доставка еды</a></li>
                        <li><a href="#">Банкеты</a></li>
                        <li><a href="#">Новые рестораны на Biglion</a></li>
                    </ul>
                </li>
                <li class="left__links">
                    <img src="./img/icons/4.png" alt="">
                    <a href="#">Развлечения</a>
                    <ul class="left__submenue">
                        <li><a href="#">Квесты</a></li>
                        <li><a href="#">Экскурсии и выставки</a></li>
                        <li><a href="#">Другое</a></li>

                    </ul>



                </li>
                <li class="left__links">
                    <img src="./img/icons/5.png" alt="">
                    <a href="#">Обучение</a>
                    <ul class="left__submenue">
                        <li><a href="#">Иностранные языки</a></li>
                        <li><a href="#">Профессиональное образование</a></li>
                        <li><a href="#">Другое</a></li>

                    </ul>
                </li>
                <li class="left__links">
                    <img src="./img/icons/6.png" alt="">
                    <a href="#">Авто</a>
                    <ul class="left__submenue">

                        <li><a href="#">Шиномонтаж</a></li>
                        <li><a href="#">Другое</a></li>

                    </ul>

                </li>
                <li class="left__links">
                    <img src="./img/icons/7.png" alt="">
                    <a href="#">Фитнес</a>
                </li>
                <li class="left__links">
                    <img src="./img/icons/8.png" alt="">
                    <a href="#">Концерты</a>
                </li>
                <li class="left__links">
                    <img src="./img/icons/9.png" alt="">
                    <a href="">Дети</a>
                </li>
                <li class="left__links">
                    <img src="./img/icons/10.png" alt="">
                    <a href="#">Разное</a>
                    <ul class="left__submenue">

                        <li><a href="#">Фотосессии</a></li>
                        <li><a href="#">Другое</a></li>

                    </ul>
                </li>
                <li class="left__links">
                    <img src="./img/icons/11.png" alt="">
                    <a href="#">Акции в Подмосковье</a>
                </li>
            </ul>
            <div class="burger "><img src="./img/burger.svg" alt=""></div>
        </div>
        @show
        @section('content')
        <a href="#header" class="go__top"></a>
        <div class="slider__contanier">
            <div class="auto__slider">
                <div class="slider-items"></div>
                <div class="slider-items"></div>
                <div class="slider-items"></div>
            </div>
        </div>
        <div class="cards">

            <div class="main__content card_content">
                <div class="card__img">
                    <a href="https://www.instagram.com/?hl=ru"><img src="./img/fa82a77f81f786eaa0efde4b973a5e9b.jpg" alt=""></a>
                </div>
                <div class="card__title">
                    <a href="https://www.instagram.com/?hl=ru">Посетить инстаграм «Фэнтази парк»</a>
                </div>
            </div>
            <div class="main__content card_content">
                <div class="card__img">
                    <a href="https://www.instagram.com/?hl=ru"><img src="./img/fa82a77f81f786eaa0efde4b973a5e9b.jpg" alt=""></a>
                </div>
                <div class="card__title">
                    <a href="https://www.instagram.com/?hl=ru">Посетить инстаграм «Фэнтази парк»</a>
                </div>
            </div>
            <div class="main__content card_content">
                <div class="card__img">
                    <a href="https://www.instagram.com/?hl=ru"><img src="./img/fa82a77f81f786eaa0efde4b973a5e9b.jpg" alt=""></a>
                </div>
                <div class="card__title">
                    <a href="https://www.instagram.com/?hl=ru">Посетить инстаграм «Фэнтази парк»</a>
                </div>
            </div>
            <div class="main__content card_content">
                <div class="card__img">
                    <a href="https://www.instagram.com/?hl=ru"><img src="./img/fa82a77f81f786eaa0efde4b973a5e9b.jpg" alt=""></a>
                </div>
                <div class="card__title">
                    <a href="https://www.instagram.com/?hl=ru">Посетить инстаграм «Фэнтази парк»</a>
                </div>
            </div>
            <div class="main__content card_content">
                <div class="card__img">
                    <a href="https://www.instagram.com/?hl=ru"><img src="./img/fa82a77f81f786eaa0efde4b973a5e9b.jpg" alt=""></a>
                </div>
                <div class="card__title">
                    <a href="https://www.instagram.com/?hl=ru">Посетить инстаграм «Фэнтази парк»</a>
                </div>
            </div>
            <div class="main__content card_content">
                <div class="card__img">
                    <a href="https://www.instagram.com/?hl=ru"><img src="./img/fa82a77f81f786eaa0efde4b973a5e9b.jpg" alt=""></a>
                </div>
                <div class="card__title">
                    <a href="https://www.instagram.com/?hl=ru">Посетить инстаграм «Фэнтази парк»</a>
                </div>
            </div>
            <div class="main__content card_content">
                <div class="card__img">
                    <a href="https://www.instagram.com/?hl=ru"><img src="./img/fa82a77f81f786eaa0efde4b973a5e9b.jpg" alt=""></a>
                </div>
                <div class="card__title">
                    <a href="https://www.instagram.com/?hl=ru">Посетить инстаграм «Фэнтази парк»</a>
                </div>
            </div>
            <div class="main__content card_content">
                <div class="card__img">
                    <a href="https://www.instagram.com/?hl=ru"><img src="./img/fa82a77f81f786eaa0efde4b973a5e9b.jpg" alt=""></a>
                </div>
                <div class="card__title">
                    <a href="https://www.instagram.com/?hl=ru">Посетить инстаграм «Фэнтази парк»</a>
                </div>
            </div>
            <div class="main__content card_content">
                <div class="card__img">
                    <a href="https://www.instagram.com/?hl=ru"><img src="./img/fa82a77f81f786eaa0efde4b973a5e9b.jpg" alt=""></a>
                </div>
                <div class="card__title">
                    <a href="https://www.instagram.com/?hl=ru">Посетить инстаграм «Фэнтази парк»</a>
                </div>
            </div>

        </div>
        @show
        @section('footer')
        <footer class="footer pd_0" id="footer">
            <div class="footer_frstpart footer_blog">
                <div class=" footer_menu_blog">
                    <div class="foot1">
                        <div class="footer_contact">
                            <a href="tel:+7(800) 2000-649" class="phone">+79150238800</a>
                            <p class="contact_description">
                                Для звонка из Москвы<br>
                                и регионов России
                            </p>
                            <a href="/company/contact_us" class="btn-contact">Связаться с нами</a>
                        </div>

                        <div class="menu_block">
                            <div class="menu_block_header">Компания</div>
                            <ul class="blaock_header_link_list">
                                <li>
                                    <a href="{{route('gethowWork')}}">Как работает skidkirus</a>
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
                            <p class="copyright"> © 2015-2020 skidkirus </p>
                           
                        </div>

                        <div class="footer_info_center">

                            
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

</body>

</html>
@show
