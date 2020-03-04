<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>для вашего бизнеса</title>
    <link rel="stylesheet" href="./style/for-businees.css">
    <!-- <link rel="stylesheet" href="./style/slick.css">
    <link rel="stylesheet" href="./style/slick-theme.css"> -->
    <link rel="stylesheet" href="{{asset('style/for-businees.css')}}" />
    <link rel="stylesheet" href="{{asset('style/main.css')}}" />
    <link rel="stylesheet" href="{{asset('style/blog.css')}}">
    <link rel="stylesheet" href="{{asset('style/style.css')}}" />
    <!-- <link rel="stylesheet" href="./style/slider.css"> -->
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
            <a href="index.html"><img src="./img/logo.png" alt=""></a>
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
                                    <a>
                                        <h3>Красота</h3>
                                    </a>
                                    <li><a href="#">Уход за волосами</a></li>
                                    <li><a href="#">Барбершопы</a></li>
                                    <li><a href="#">Эпиляция</a></li>
                                    <li><a href="#">Косметология</a></li>
                                    <li><a href="#">SPA, массаж</a></li>
                                    <li><a href="#">Маникюр, педикюр</a></li>
                                    <li><a href="#">Коррекция фигуры</a></li>
                                    <li><a href="#">Другое</a></li>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Здоровые</h3>
                                    </a>
                                    <li><a href="#">Стоматология</a></li>
                                    <li><a href="#">Диагностика, обследование</a></li>
                                    <li><a href="#">Коррекция зрения</a></li>
                                    <li><a href="#">Другое</a></li>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Ресеоран и кафе</h3>
                                    </a>
                                    <li><a href="#">Стоматология</a></li>
                                    <li><a href="#">Диагностика, обследование</a></li>
                                    <li><a href="#">Коррекция зрения</a></li>
                                    <li><a href="#">Другое</a></li>
                                </ul>
                            </div>
                            <div class="links">
                                <ul>
                                    <a href="#">
                                        <h3>Развлечения</h3>
                                    </a>
                                    <li><a href="#">Квесты </a></li>
                                    <li><a href="#">Экскурсии и выставки</a></li>
                                    <li><a href="#">Другое</a></li>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Обучение</h3>
                                    </a>
                                    <li><a href="#">Иностранные языки </a></li>
                                    <li><a href="#">Профессиональное образование</a></li>
                                    <li><a href="#">Другое</a></li>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Авто</h3>
                                    </a>
                                    <li><a href="#">Шиномонтаж </a></li>
                                    <li><a href="#">Другое</a></li>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Фитнес</h3>
                                    </a>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3></h3>
                                    </a>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Дети</h3>
                                    </a>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Разное</h3>
                                    </a>
                                    <li><a href="#">Фотосессии </a></li>
                                    <li><a href="#">Другое</a></li>
                                </ul>
                            </div>
                            <div class="links">
                                <ul>
                                    <a href="#">
                                        <h3>Акции в Подмосковье</h3>
                                    </a>
                                    <li><a href="#">Балашиха</a></li>
                                    <li><a href="#">Видное</a></li>
                                    <li><a href="#">Дзержинский</a></li>
                                    <li><a href="#">Дмитров</a></li>
                                    <li><a href="#">Домодедово</a></li>
                                    <li><a href="#">Железнодорожный</a></li>
                                    <li><a href="#">Жуковский</a></li>
                                    <li><a href="#">Ивантеевка</a></li>
                                    <li><a href="#">Истра</a></li>
                                    <li><a href="#">Королев</a></li>
                                    <li><a href="#">Красногорск</a></li>
                                    <li><a href="#">Лобня</a></li>
                                    <li><a href="#">Люберцы</a></li>
                                    <li><a href="#">Мытищи</a></li>
                                    <li><a href="#">Наро-Фоминск</a></li>
                                    <li><a href="#">Ногинск</a></li>
                                    <li><a href="#">Одинцово</a></li>
                                    <li><a href="#">Орехово-Зуево</a></li>
                                    <li><a href="#">Подольск</a></li>
                                    <li><a href="#">Пушкино</a></li>
                                    <li><a href="#">Раменское</a></li>
                                    <li><a href="#">Реутов</a></li>
                                    <li><a href="#">Сергиев Посад</a></li>
                                    <li><a href="#">Серпухов</a></li>
                                    <li><a href="#">Солнечногорск</a></li>
                                    <li><a href="#">Троицк</a></li>
                                    <li><a href="#">Химки</a></li>
                                    <li><a href="#">Чехов</a></li>
                                    <li><a href="#">Щербинка</a></li>
                                    <li><a href="#">Электросталь</a></li>
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
                                        <h3>Новогодние праздники</h3>
                                    </a>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Москва и Область</h3>
                                    </a>
                                    <li><a href="#">Отели в Подмосковье на ближайшие выходные </a></li>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Санкт-Петербург и область </h3>
                                    </a>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Карелия </h3>
                                    </a>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Селигер </h3>
                                    </a>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Золотое кольцо </h3>
                                    </a>
                                    <li><a href="#">Углич</a></li>
                                    <li><a href="#">Владимир</a></li>
                                    <li><a href="#">Иваново</a></li>
                                    <li><a href="#">Кострома</a></li>
                                    <li><a href="#">Переславль-Залесский</a></li>
                                    <li><a href="#">Ростов</a></li>
                                    <li><a href="#">Сергиев Посад</a></li>
                                    <li><a href="#">Суздаль</a></li>
                                    <li><a href="#">Ярославль</a></li>
                                    <li>
                                        <a href="#"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="links">
                                <ul>
                                    <a href="#">
                                        <h3>Юг России</h3>
                                    </a>
                                    <li><a href="#">Адлер</a></li>
                                    <li><a href="#">Анапа</a></li>
                                    <li><a href="#">Кисловодск</a></li>
                                    <li><a href="#">Геленджик</a></li>
                                    <li><a href="#">Ессентуки</a></li>
                                    <li><a href="#">Сочи</a></li>
                                    <li><a href="#">Ставрополь</a></li>
                                    <li><a href="#">Краснодар</a></li>
                                    <li><a href="#">Майкоп</a></li>
                                    <li><a href="#">Нальчик</a></li>
                                    <li><a href="#">Пятигорск</a></li>
                                    <li><a href="#">Ростов-на-Дону</a></li>
                                    <li><a href="#">Элиста</a></li>
                                    <li><a href="#">Кавказ</a></li>
                                    <li><a href="#">Туапсе</a></li>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Крым</h3>
                                    </a>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Абхазия</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="links">
                                <ul>
                                    <a href="#">
                                        <h3>Другие города</h3>
                                    </a>
                                    <li>
                                        <a href="#"></a>
                                    </li>
                                    <li><a href="#">Архангельск</a></li>
                                    <li><a href="#">Вологда</a></li>
                                    <li><a href="#">Белгород</a></li>
                                    <li><a href="#">Брянск</a></li>
                                    <li><a href="#">Великий Новгород</a></li>
                                    <li><a href="#">Воронеж</a></li>
                                    <li><a href="#">Калининград</a></li>
                                    <li><a href="#">Калуга</a></li>
                                    <li><a href="#">Курск</a></li>
                                    <li><a href="#">Липецк</a></li>
                                    <li><a href="#">Орел</a></li>
                                    <li><a href="#">Псков</a></li>
                                    <li><a href="#">Рязань</a></li>
                                    <li><a href="#">Смоленск</a></li>
                                    <li><a href="#">Тамбов</a></li>
                                    <li><a href="#">Тверь</a></li>
                                    <li><a href="#">Тула</a></li>
                                </ul>
                            </div>
                            <div class="links">
                                <ul>
                                    <a href="#">
                                        <h3>Поволжье</h3>
                                    </a>
                                    <li><a href="#">Астрахань</a></li>
                                    <li><a href="#">Волгоград</a></li>
                                    <li><a href="#">Йошкар-Ола</a></li>
                                    <li><a href="#">Казань</a></li>
                                    <li><a href="#">Киров</a></li>
                                    <li><a href="#">Нижний Новгород</a></li>
                                    <li><a href="#">Самара</a></li>
                                    <li><a href="#">Саранск</a></li>
                                    <li><a href="#">Саратов</a></li>
                                    <li><a href="#">Ульяновск</a></li>
                                    <li><a href="#">Чебоксары</a></li>
                                    <li><a href="#">Пенза</a></li>
                                </ul>
                            </div>
                            <div class="links">
                                <ul>
                                    <a href="#">
                                        <h3>Алтай</h3>
                                    </a>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Байкал</h3>
                                    </a>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Урал</h3>
                                    </a>
                                    <li><a href="#">Екатеринбург</a></li>
                                    <li><a href="#">Ижевск</a></li>
                                    <li><a href="#">Курган</a></li>
                                    <li><a href="#">Магнитогорск</a></li>
                                    <li><a href="#">Оренбург</a></li>
                                    <li><a href="#">Пермь</a></li>
                                    <li><a href="#">Уфа</a></li>
                                    <li><a href="#">Челябинск</a></li>
                                </ul>
                            </div>
                            <div class="links">
                                <ul>
                                    <a href="#">
                                        <h3>Сибирь</h3>
                                    </a>
                                    <li><a href="#">Барнаул</a></li>
                                    <li><a href="#">Иркутск</a></li>
                                    <li><a href="#">Кемерово</a></li>
                                    <li><a href="#">Красноярск</a></li>
                                    <li><a href="#">Новокузнецк</a></li>
                                    <li><a href="#">Новосибирск</a></li>
                                    <li><a href="#">Омск</a></li>
                                    <li><a href="#">Томск</a></li>
                                    <li><a href="#">Тюмень</a></li>
                                    <li><a href="#">Чита</a></li>
                                </ul>
                                <ul>
                                    <a href="">
                                        <h3>Популярные санатории </h3>
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
                                    <li><a href="#">Россия</a></li>
                                    <li><a href="#">Турция</a></li>
                                    <li><a href="#">Европа</a></li>
                                    <li><a href="#">Пляжный отдых</a></li>
                                    <li><a href="#">Другие страны</a></li>
                                    <li><a href="#">Туры на север из СПб</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="link" href="#">Магазины</a>

                        <div class="bottom__links bottom__links-hover">
                            <div class="links">
                                <ul>
                                    <li><a href="#">Все бренды</a></li>
                                    <li><a href="#">BOMBBAR</a></li>
                                    <li><a href="#">MODIS</a></li>
                                    <li><a href="#">FiNN FLARE</a></li>
                                    <li><a href="#">Pampers</a></li>
                                    <li><a href="#">ИЛЬ ДЕ БОТЭ</a></li>
                                    <li><a href="#">Плеер.ру</a></li>
                                    <li><a href="#">ЛитРес</a></li>
                                    <li><a href="#">Домовой</a></li>
                                    <li><a href="#">Book24</a></li>
                                    <li><a href="#">Райтон</a></li>
                                    <li><a href="#">Линзмастер</a></li>
                                    <li><a href="#">Орматек</a></li>
                                    <li><a href="#">Холодильник.РУ</a></li>
                                    <li><a href="#">Матрас.ру</a></li>
                                </ul>

                            </div>
                            <div class="links">
                                <ul>
                                    <li><a href="#">М.Видео</a></li>
                                    <li><a href="#">iHerb</a></li>
                                    <li><a href="#">O’STIN</a></li>
                                    <li><a href="#">TOY.RU</a></li>
                                    <li><a href="#">Фран</a></li>
                                    <li><a href="#">Связной</a></li>
                                    <li><a href="#">Бронницкий ювелир</a></li>
                                    <li><a href="#">Все инструменты</a></li>
                                    <li><a href="#">Yves Rocher</a></li>
                                    <li><a href="#">Puma</a></li>
                                    <li><a href="#">re:Store</a></li>
                                    <li><a href="#">TheOutlet.ru</a></li>
                                    <li><a href="#">Созвездие красоты</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="link" href="#">Кешбэк</a>

                        <div class="bottom__links bottom__links-hover">

                            <div class="links">
                                <ul>
                                    <a href="#">
                                        <h3>Игры</h3>
                                    </a>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Путешествия</h3>
                                    </a>
                                    <li><a href="#">Бронирование отелей</a></li>
                                    <li><a href="#">Заказ билетов</a></li>
                                    <li><a href="#">Подбор тура</a></li>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Для детей</h3>
                                    </a>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Для дома</h3>
                                    </a>
                                    <li><a href="#">Для дома</a></li>
                                    <li><a href="#">Для сада</a></li>
                                    <li><a href="#">Мебель</a></li>
                                    <li><a href="#">Зоомагазины</a></li>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Еда</h3>
                                    </a>
                                </ul>
                            </div>
                            <div class="links">
                                <ul>
                                    <a href="#">
                                        <h3>Развлечения</h3>
                                    </a>
                                    <li><a href="#">Книги</a></li>
                                    <li><a href="#">Товары для творчества</a></li>
                                    <li><a href="#">Спорт</a></li>
                                    <li><a href="#">Товары для взрослых</a></li>
                                    <li><a href="#">Развлечения</a></li>
                                    <li><a href="#">Подарки и цветы</a></li>
                                    <li><a href="#">Концерты</a></li>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Одежда, обувь, аксессуары</h3>
                                    </a>
                                    <li><a href="#">дежда</a></li>
                                    <li><a href="#">Ювелирные украшения</a></li>
                                    <li><a href="#">Обувь</a></li>
                                    <li><a href="#">Аксессуары</a></li>
                                </ul>
                            </div>
                            <div class="links">
                                <ul>
                                    <a href="#">
                                        <h3>Услуги</h3>
                                    </a>
                                    <li><a href="#">Образование</a></li>
                                    <li><a href="#">Хостинг</a></li>
                                    <li><a href="#">Провайдер</a></li>
                                    <li><a href="#">Страхование</a></li>
                                    <li><a href="#">Кредиты и займы</a></li>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Авто</h3>
                                    </a>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Красота & Здоровье</h3>
                                    </a>
                                </ul>
                                <ul>
                                    <a href="#">
                                        <h3>Электроника и техника</h3>
                                    </a>
                                    <li><a href="#">Софт и игры</a></li>
                                    <li><a href="#">Техника для дома</a></li>
                                    <li><a href="#">Телефоны и планшеты</a></li>
                                    <li><a href="#">Компьютеры и ноутбуки</a></li>
                                    <li><a href="#">Фото и видео</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="link" href="#">Товары по купонам</a>
                        <div class="bottom__links bottom__links-hover">
                            <div class="links">
                                <ul>
                                    <li><a href="#">Мебель и ремонт</a></li>
                                    <li><a href="#">Товары для дома</a></li>
                                    <li><a href="#">Бытовая техника и электроника</a></li>
                                    <li><a href="#">Здоровье</a></li>
                                    <li><a href="#">Продукты питания</a></li>
                                    <li><a href="">Красота</a></li>
                                    <li><a href="#">Обувь и одежда</a></li>
                                    <li><a href="#">Товары для детей</a></li>
                                    <li><a href="#">Сувенирная продукция</a></li>
                                    <li><a href="#">Цветы</a></li>
                                    <li><a href="#">Воздушные шары</a></li>
                                    <li><a href="#">18+</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    {{--    go home page--}}
    <div class ="breadcrumbs">
        <ul class="breadcrumbs_list">
            <li class="breadcrumbs_item">
                <a class="breadcrumbs_item_list" href="{{route('home')}}">Главная</a>
                <span class ="span-arrow">&#8594;</span>
            </li>
            <li class="breadcrumbs_item">
                <span>Сайты</span>
            </li>
        </ul>
    </div>
    {{--    go home page end--}}
    <main class="forbusiness_main">
        <div class="forbusiness_container">
            <h1 class="title_bigilon">
                        <span>
                            Skidkirus
                        </span><br>
                <span>для вашего бизнеса</span>
            </h1>
            <button class="bigilon_btn">
                Стать партнером Skidkirus
            </button>
            <div class ="bigilon_image">
                <img class="bg_image" src ="img/main-bg-full.png">
            </div>



        </div>
        <div class="about_bigilon">
            <div class="cont">
                <h2 class="about_title">
                    Что такое Skidkirus ?
                </h2>
                <p>
                    Компания Skidkirus — лидер российского рынка по продаже скидочных купонов. Миллионы клиентов доверяют нам самое
                    дорогое: свое свободное время. Каждый день мы помогаем реализовать давно задуманное с самым лучшим ценовым
                    предложением.
                </p>
                <p>
                    Секрет нашего успеха - наши партнеры. На данный момент, Skidkirus имеет представительства в 75 городах и более
                    20 тысяч партнеров, которые нам доверяют и помогают каждый день делать наших клиентов чуть более счастливыми,
                    чем вчера.
                </p>
            </div>
        </div>
        <div class="forbusiness_success">
            <div class="cont">
                <h2 class="about_title">Оцените наш успех!</h2>
                Станьте его частью!
                <p>Skidkirus — лидер купонных сервисов на российском рынке более 9 лет. Мир Skidkirus яркий, насыщенный и успешный!
                    Цифры говорят сами за себя.
                </p>
                <div class="forbusiness_success_list">
                    <div class="succes_list_item">
                        <b>25 млн</b>
                        <span>пользователей
                                    <br>
                                    в год
                                </span>

                    </div>
                    <div class="succes_list_item">
                        <b>20 тыс.</b>
                        <span>партнёров</span>
                    </div>
                    <div class="succes_list_item">
                        <b> >600</b>
                        <span>
                                    сотрудников
                                </span>
                    </div>
                    <div class="succes_list_item">
                        <b>7,6 млн</b>
                        <span>
                                    пользователей
                                    <br>
                                    мобильных приложений
                                </span>
                    </div>
                    <div class="succes_list_item">
                        <b>75</b>
                        <span>городов в России</span>
                    </div>
                    <div class="succes_list_item">
                        <b>10 тыс.</b>
                        <span>акций ежедневно</span>
                    </div>
                    <div class="succes_list_item">
                        <b>1,5 млн</b>
                        <span>
                                    активных покупателей
                                    <br>
                                    в год
                                </span>
                    </div>
                    <div class="succes_list_item">
                        <b>6 млн</b>
                        <span>
                                    проданных купонов
                                    <br>
                                    в год
                                </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="forbusiness_resultat">
            <div class="cont">
                <h2 class="about_title">Партнерство с Skidkirus:  4 ключа к успеху</h2>
                <div class="forbusiness_resultat_list">
                    <div class="forbusiness_resultat_item">
                        <h3 class="item_title">
                            Оплата за результат
                        </h3>
                        <p>Результат — это наши клиенты, которые откликнулись на рекламную кампанию партнера. Заканчивается акция,
                            партнер незамедлительно получает средства, вырученные в ходе рекламной кампании.</p>
                    </div>
                    <div class="forbusiness_resultat_item">

                        <h3 class="item_title">
                            PROдвижение к успеху
                        </h3>
                        <p>Skidkirus обладает всеми доступными маркетинговыми каналами для успешного продвижения акций партнёров:
                            контекстная реклама в Яндекс и Google, email-рассылки, социальные сети и многое другое. Вашу акцию будет
                            невозможно пропустить!
                        </p>


                    </div>
                    <div class="forbusiness_resultat_item">
                        <h3 class="item_title">
                            Стабильный поток новых клиентов
                        </h3>
                        <p>
                            Привлечение новых клиентов — легкая задача для Skidkirus. Благодаря многочисленной клиентской базе Skidkirus
                            по всей России, а также активному продвижению акций партнеров, обеспечивается широкий охват акции. О вашей
                            акции узнает каждый!
                        </p>
                    </div>
                    <div class="forbusiness_resultat_item">
                        <h3 class="item_title">
                            Пользователь Skidkirus — ваш лояльный клиент

                        </h3>
                        <p>
                            Наши пользователи знают, что за каждым купоном стоит проверенная и качественная услуга. Пользователи
                            Skidkirus готовы пробовать, потому что они нам доверяют. А мы доверяем нашим партнерам. Благодаря такому
                            взаимодействию положительные отзывы и рекомендации привлекают все больше новых пользователей в Skidkirus,
                            которые впоследствии становятся вашими постоянными клиентами.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="forbusiness_pro">
            <div class="forbusiness_container">
                <h2 class="about_title">
                    PROдвижение с Skidkirus  — ваш путь к успеху!
                </h2>
                <p>
                    Мы знаем, о чем говорим. Skidkirus — не просто эффективный канал продвижения для вашего бизнеса. Партнер
                    получает уникальную возможность увидеть значительный результат в короткие сроки, так как продвижение акции
                    происходит по всем доступным маркетинговым каналам. Мы зарабатываем только тогда, когда зарабатывает наш
                    партнёр!
                </p>
                <div class="forbusiness_table">
                    <table>
                        <thead>
                        <tr>
                            <th></th>
                            <th>??</th>
                            <th>Наружная<br>реклама<br>радио
                            </th>
                            <th></th>
                            <th>ТВ-реклама</th>
                            <th>Интернет-<br>маркетинг</th>
                            <th>Социальные<br>сети</th>
                        </tr>
                        <tr>
                            <td>
                                Большой охват <br>
                                аудитории
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Привлечение потока <br>
                                новых клиентов
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Возможности <br>
                                эффективного таргетинга
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Оплата за результат
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                            <td>
                                <svg></svg>
                            </td>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <div class="forbusinees_preview">
            <div class="cont">
                <div class="about_title">
                    Отзывы  наших партнёров
                </div>

                <div class="forbusiness_slider">
                    <ul class="forbusiness_slider_ul">
                        <li class="slider_ul_item">
                            <h3 class="slider_ul_item_title">
                                Medilux, кабинет лазерной косметологии<br>г. Магнитогорск
                            </h3>
                            <div class="slider_text">
                                <p>
                                    Осенью 2013 года у нас случилось ЧП: сломался лазерный аппарат, с помощью которого мы
                                    предоставляли свою основную услугу. То есть мы фактически лишились главного источника дохода.
                                    Нам надо было срочно продвигать другие услуги, которые можно делать без аппарата,
                                    чтобы какое-то время продержаться на плаву, пока мы его не заменим. Эти услуги были всегда дополнительными,
                                    и поэтому нам нужно было срочно привлечь на них большой объем клиентов. Тут-то мы и стали партнерами “Биглиона”.
                                    Мы быстро договорились и запустили несколько акций, благодаря которым всю зиму нам было,
                                    чем расплачиваться по основным платежам. Потом аппарат мы отремонтировали, и все наладилось,
                                    но с купонами мы продолжаем работать. Сейчас часть клиентов приходит сделать что-то по акции.
                                    Таких, наверное, большинство. Но часть все-таки возвращается и пользуется нашими услугами регулярно.
                                </p>
                            </div>
                        </li>
                        <li class="slider_ul_item">
                            <h3 class="slider_ul_item_title">
                                Медицинский центр ЛДЦ им. Пирогова<br>
                                г. Москва
                            </h3>
                            <div class="slider_text">
                                <p>
                                    Как-то мне позвонил один из директоров или менеджеров “Биглиона”. Думаю, они всех новичков
                                    на рынке отслеживают и предлагают сотрудничать, что, конечно, правильно. Так как это самый
                                    крупный сервис среди себе подобных, я решил, что стоит попробовать. После некоторых переговоров
                                    мы пришли к тем договоренностям, которые и нас, и "Биглион" устроили и устраивают до сих пор.
                                    У нас довольно узкая направленность, поэтому мы как один раз придумали акции, так их больше особо не меняем.
                                    Да и зачем, если по ним к нам “Биглион” приносит ощутимую часть наших клиентов?

                                </p>
                                <p>
                                    Алексей Телегин, <br>
                                    Директор
                                </p>
                            </div>
                        </li>
                        <li class="slider_ul_item">
                            <h3 class="slider_ul_item_title">
                                Стоматология Мастер-дент<br>г. Чебоксары
                            </h3>
                            <div class="slider_text">
                                <p>
                                    У нас в целом был стабильный поток постоянных пациентов, но нужно было пустить свежую кровь.
                                    Хотелось, чтобы про клинику узнало больше людей. С купонного сайта действительно приходят пациенты
                                    и становятся постоянными клиентами. Конечно, много таких, которые привыкли просто пользоваться
                                    разовыми акциями, гонятся за халявой. Но это, как мне кажется, тоже неплохо: часто бывает,
                                    что придут по акции на лечение кариеса, а остаются на протезирование. Они могут потом и не прийти,
                                    а пойти по следующей акции в другой клинике что-то вылечить,
                                    но в любом случае они получили у нас услугу - это уже хорошо.

                                </p>
                                <p>
                                    Алексей Телегин, <br>
                                    Директор
                                </p>
                            </div>


                        </li>
                        <li class="slider_ul_item">
                            <h3 class="slider_ul_item_title">
                                Гостиничный SPA-центр "Мед"<br>г. Кемерово
                            </h3>
                            <div class="slider_text">
                                <p>
                                    С некоторыми акциями у нас сложилась очень любопытная история: попробовав, люди потом покупают
                                    их в подарок и советую всем знакомым. Так, например, пара записывается на услугу массажа,
                                    а через несколько дней на этот же массаж по купону приходят уже родители - всем понравилось,
                                    все советуют услугу друг другу. И это не единичный случай. Уже получается буквально несколько
                                    поколений клиентов "Биглиона"! Несмотря на то, что мы делаем большую скидку по акциям, мы относимся
                                    к клиентам "Биглиона" абсолютно также, как и ко всем остальным. Мы не экономим на них, потому что для
                                    нас качество - это самое главное. Мы заинтересованы в том, чтобы людям было интересно про нас
                                    рассказывать и самим тоже захотелось прийти снова.
                                </p>
                                <p>
                                    Алексей Телегин, <br>
                                    Директор
                                </p>
                            </div>


                        </li>


                        <li class="slider_ul_item"></li>
                        <li class="slider_ul_item"></li>
                        <li class="slider_ul_item"></li>
                        <li class="slider_ul_item"></li>
                        <li class="slider_ul_item"></li>
                        <li class="slider_ul_item"></li>
                        <li class="slider_ul_item"></li>
                        <li class="slider_ul_item"></li>
                    </ul>
                    <div class="slider_dot">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="forbusinees_partners">
            <div class="cont">
                <h2 class="about_title">
                    Наши партнёры
                </h2>
                <div>
                    <img class="image_partners" src='img/partners.png' alt="Image Partners">

                </div>
            </div>
        </div>
        <div class="forbusinees_registr">
            <div class="cont">
                <h2 class="about_title">
                    Стать партнёром ??
                </h2>
                <div class="registr_form">
                    <form class="reg_form" method="" action ="">

                        <label>Название компании с указанием организационно-правовой формы</label>

                        <input class="input_for_name_companie" type="text">

                        <label>Сайт компании</label>
                        <input class="input_for_url" type="text" placeholder="http://">
                        <label>Хочу продвигать на ??</label>

                        <label>
                            <input class="reg_radio" type= "radio">
                            <span class="radion_dot"></span>
                            <span class="redio_text">Услуга</span>
                        </label>
                        <label>
                            <input class="reg_radio" type= "radio">
                            <span class="radion_dot"></span>
                            <span class="radio_text">Товар</span>
                        </label>

                        <div class="select">
                            <div class="select_item">

                            </div>
                            <label>Вид услуги</label>
                            <input class="input_for_name_companie" type="text">
                        </div>



                        <label>Услуга или товар, который вы хотите разместить</label>
                        <input  type="text">

                        <label>Город, где будет продаваться услуга или товар</label>
                        <input  type="text">
                        <label>Имя и фамилия</label>
                        <input  type="text">
                        <label>Телефон для связи</label>
                        <input  type="text">
                        <label>Email</label>
                        <input  type="text">
                        <label>Комментарий (необязательно)</label>
                        <input  type="text">
                        <label>Комментарий (необязательно)</label>
                        <textarea class="reg_textarea" cols="30" rows="10">
                            </textarea>
                        <button class="sent_btn" type="submit">
                            Отправить
                        </button>

                    </form>
                    <div class="register_contact">
                        <h3 class='register_contact_title'>
                            Наши контакты
                        </h3>
                        <h4 class="register_contact_sec_title">
                            Телефон
                        </h4>
                        <a class="register_contact_phone" href="#">+79150238800</a>

                        <h4 class="title_email">
                            Email
                        </h4>
                        <a class="register_contact_phone" href="#">info@wave-it.ru</a>
                    </div>

                </div>
            </div>
        </div>
        <footer>
            <div class="footer_frstpart footer_blog footer_for_businees">
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
                                    <a href="{{route('gethowWork')}}">Как работает Skidkirus</a>
                                </li>
                                </li>
                                <li>
                                    <a href="#">Вакансии</a>
                                </li>
                                <li>
                                    <a href="{{route('getBlog')}}">Блог</a>
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
                                    <a href="{{route('getForBisnes')}}" >Для Вашего бизнеса</a>

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
                            <p class="copyright"> © 2015-2020</p>
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
    </main>
</div>
<script src="./src/jquery-3.4.1.min.js"></script>
<script src="./src/slick.min.js"></script>
<script src="./src/script.js"></script>
<script src="./src/slider.js"></script>
<script src="{{asset('src/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('src/slick.min.js')}}"></script>
<script src="{{asset('src/script.js')}}"></script>
<script src="{{asset('src/slider.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
</body>
