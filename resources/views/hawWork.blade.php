<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Как работает Biglion</title>



    <link rel="stylesheet" href="./style/how-work.css" />

    <link rel="stylesheet" href="{{asset('style/slick.css')}}">
    <link rel="stylesheet" href="{{asset('style/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('style/main.css')}}" />
    <link rel="stylesheet" href="{{asset('style/style.css')}}" />
    <link rel="stylesheet" href="{{asset('style/slider.css')}}">
    <link rel="stylesheet" href="{{asset('style/blog.css')}}">
    <link rel="stylesheet" href="{{asset('style/how-work.css')}}">

    <link rel="stylesheet" href="https://wave-it.ru/lessons/css/plugin/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/v4-shims.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
</head>
<body>
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

                                    <button type="submit" class="button button-block"/>Зарегистрироваться</button>

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


                                    <button class="button button-block"/>Вход</button>

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
    <div class="how_container">
        <div class="how">
            <div class="how_context">
                <h1 class="how_title">
                    Как работает Biglion
                </h1>
                <p class="how_text">
                    Biglion — крупнейший в России онлайн-сервис разумного потребления.
                    На сайте и в мобильном приложении у нас представлено более 10 000 акций
                    со скидками до 90% на развлечения, аквапарки, салоны красоты и SPA, кафе,
                    рестораны, услуги медицинских клиник, на отели и туры и многое другое.
                </p>
                <div class="how_icons">
                    <div class="how_icons_item">
                        <p class="how_icons_item_text">
                            Круглосуточная<br>
                            поддержка
                        </p>
                    </div>
                    <div class="how_icons_item">
                        <p class="how_icons_item_text">
                            Проверенные<br>
                            партнёры
                        </p>
                    </div>
                    <div class="how_icons_item">
                        <p class="how_icons_item_text">
                            Гарантированный<br>
                            возврат
                        </p>
                    </div>
                </div>
            </div>

            <div class="how_context">
                <h1 class="how_title_second">
                    Почему в Biglion такие большие скидки
                </h1>
                <p class="how_text">
                    Мы сотрудничаем только с проверенными партнерами,
                    которые предоставляют нашим пользователям качественные
                    услуги по самым выгодным ценам. С каждым из них мы
                    договариваемся о лучших условиях для вас.
                </p>
            </div>
            <div class="how_context">
                <h1 class="how_title_second">
                    Более 10 000 акций со скидками до 90%
                </h1>
                <div class="how_categories_icons">
                    <a href="#" class="how_categories_icons_item">
                        <div class='categories_img cat_img_1'>
                        </div>
                        <span class="icons_item_text">
                                    Красота
                                   </span>
                    </a>
                    <a href="#" class="how_categories_icons_item">
                        <div class='categories_img cat_img_2'>
                        </div>
                        <span class="icons_item_text">
                                    Здоровье
                                   </span>
                    </a>
                    <a href="#" class="how_categories_icons_item">
                        <div class='categories_img cat_img_3'>

                        </div>
                        <span class="icons_item_text">
                                        Рестораны<br> и кафе
                                    </span>
                    </a>
                    <a href="#" class="how_categories_icons_item">
                        <div class='categories_img cat_img_4'>

                        </div>
                        <span class="icons_item_text">
                                        Развлечения
                                    </span>
                    </a>
                    <a href="#" class="how_categories_icons_item">
                        <div class='categories_img cat_img_5'>

                        </div>
                        <span class="icons_item_text">
                                        Обучение
                                    </span>
                    </a>
                    <a href="#" class="how_categories_icons_item">
                        <div class='categories_img cat_img_6'>
                        </div>
                        <span class="icons_item_text">
                                        Авто
                                    </span>
                    </a>
                    <a href="#" class="how_categories_icons_item">
                        <div class='categories_img cat_img_7'>
                        </div>
                        <span class="icons_item_text">
                                        Фитнес
                                    </span>
                    </a>
                    <a href="#" class="how_categories_icons_item">
                        <div class='categories_img cat_img_8'>

                        </div>
                        <span class="icons_item_text">
                                        Концерты
                                    </span>
                    </a>
                    <a href="#" class="how_categories_icons_item">
                        <div class='categories_img cat_img_9'>

                        </div>
                        <span class="icons_item_text">
                                        Дети
                                    </span>
                    </a>
                    <a href="#" class="how_categories_icons_item">
                        <div class='categories_img cat_img_10'>

                        </div>
                        <span class="icons_item_text">
                                        Разное
                                    </span>
                    </a>
                    <a href="#" class="how_categories_icons_item">
                        <div class='categories_img cat_img_11'>

                        </div>
                        <span class="icons_item_text">
                                        Акции<br> в Подмосковье
                                    </span>
                    </a>
                </div>
            </div>

            <div class="how_context">
                <h1 class="how_title_second">
                    Cashback Biglion
                </h1>
                <p class="how_text">
                    C Biglion можно покупать в онлайн или оффлайн-магазинах и возвращать часть суммы назад.<br>
                    Чтобы узнать, как, переходите в раздел
                    <a class='' href="#">Кэшбэк</a>!
                </p>
                <div class="how_shops_section">
                    <div class="how_shops_section_item">
                        <div class="item_icon">

                        </div>

                        <h3 class="item_title">
                            Выберите магазин
                        </h3>
                        <p class="item_text">
                            Откройте раздел
                            <a class="item_link" href="#">
                                кэшбэк
                            </a>
                            на сайте Biglion и перейдите в понравившийся магазин
                        </p>
                    </div>
                    <div class="how_shops_section_item">
                        <div class="item_icon">
                        </div>
                        <h3 class="item_title">
                            Сделайте покупку
                        </h3>
                        <p class="item_text">
                            Как вы обычно это делаете
                        </p>

                    </div>
                    <div class="how_shops_section_item">
                        <div class="item_icon">
                        </div>
                        <h3 class="item_title">
                            Получите кэшбэк
                        </h3>
                        <p class="item_text">
                            Мы вернём вам часть денег назад
                        </p>

                    </div>
                    <div class="how_shops_section_item">
                        <div class="item_icon">
                        </div>
                        <h3 class='item_title'>
                            Используйте кэшбэк
                        </h3>
                        <p class="item_text">
                            Купите купон на Biglion или выведите деньги
                        </p>

                    </div>
                </div>
            </div>

            <div class="how_context">
                <div class="mobile">
                    <div class="mobile_first_section">
                        <h1 class="how_title_second">
                            Мобильное приложение Biglion
                        </h1>
                        <p class="mobile_text">
                            Мы разработали удобные мобильные приложения для всех распространенных устройств. Теперь услуги, развлечения,
                            кафе, рестораны и многое другое со скидками доступны для вас в любом месте. Удобный поиск по карте и вашему
                            местоположению поможет экономить удобнее и быстрее!
                        </p>
                        <div class="mobile_image">

                            <a class="mobile_image_link" href="#">
                                <div class="mobile_image_div">
                                    <div class="mobile_image_text">
                                                        <span class="mobile_image_text1">
                                                            загрузить в
                                                        </span>
                                        <span class="mobile_image_text2">
                                                            App Store
                                                        </span>
                                    </div>
                                </div>
                            </a>
                            <a class="mobile_image_link" href="#">
                                <div class="mobile_image_div">
                                    <div class="mobile_image_text">
                                                        <span class="mobile_image_text1">
                                                            загрузить в
                                                        </span>
                                        <span class="mobile_image_text2">
                                                            Google Play
                                                        </span>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mobile_second_section">

                    </div>

                </div>
            </div>
        </div>
    </div>
    <footer class="footer pd_0" id="footer">
        <div class="footer_frstpart footer_blog">
            <div class=" footer_menu_blog">
                <div class="foot1">
                    <div class="footer_contact">
                        <a href="tel:+7(800) 2000-649" class="phone">8 (800) 2000-649</a>
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
                                <a href="how-work.html">Как работает Biglion</a>
                            </li>
                            </li>
                            <li>
                                <a href="#">Вакансии</a>
                            </li>
                            <li>
                                <a href="blog.html">Блог</a>
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
                                <a href="for-businees.html" >Для Вашего бизнеса</a>

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
                        <p class="copyright"> © 2010-2020 BIGLION </p>
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
</body>