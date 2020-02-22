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
                            <!-- <li>
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
                            </li> -->
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
            <div class="bottom__sub-menue sub__menue1">
                <ul>
                    <li><a href="#">Все</a></li>
                    <li><a href="#">Красота</a>
                        <div class="sub__links">
                            <ul>
                                <li><a href="#">Уход за волосами</a></li>
                                <li><a href="#">Барбершопы</a></li>
                                <li><a href="#">Эпиляция</a></li>
                                <li><a href="#">Косметология</a></li>
                                <li><a href="#">SPA, массаж</a></li>
                                <li><a href="#">Маникюр, педикюр</a></li>
                                <li><a href="#">Коррекция фигуры</a></li>
                                <li><a href="#">Другое</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Здоровые</a>
                        <div class="sub__links">
                            <ul>
                                <li><a href="#">Стоматология</a></li>
                                <li><a href="#">Диагностика, обследование</a></li>
                                <li><a href="#">Коррекция зрения</a></li>
                                <li><a href="#">Другое</a></li>
                                <li><a href="#">Лазерная коррекция зрения</a></li>
                                <li><a href="#">Лечебный массаж</a></li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#">Ресеоран и кафе</a>
                        <div class="sub__links">
                            <ul>
                                <li><a href="#">Рестораны</a></li>
                                <li><a href="#">Доставка еды</a></li>
                                <li><a href="#">Банкеты</a></li>
                                <li><a href="#">Новые рестораны на Biglion</a></li>
                            </ul>
                        </div>

                    </li>
                    <li>
                        <a href="#">Развлечения</a>
                        <div class="sub__links">
                            <ul>
                                <li><a href="#">Квесты</a></li>
                                <li><a href="#">Экскурсии и выставки</a></li>
                                <li><a href="#">Другое</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Обучение</a>
                        <div class="sub__links">
                            <ul>
                                <li><a href="#">Иностранные языки</a></li>
                                <li><a href="#">Профессиональное образование</a></li>
                                <li><a href="#">Другое</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>

                        <a href="#">Авто</a>
                        <div class="sub__links">
                            <ul>
                                <li><a href="#">Шиномонтаж</a></li>
                                <li><a href="#">Другое</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Фитнес</a></li>
                    <li><a href="#">Концерты</a></li>
                    <li><a href="#">Дети</a></li>
                    <li>
                        <a href="#">Разное</a>
                        <div class="sub__links">
                            <ul>
                                <li><a href="#">Фотосессии</a></li>
                                <li><a href="#">Другое</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="bottom__sub-menue sub__menue2">
                <ul>
                    <li><a href="#">Все</a></li>
                    <li><a href="#">Новогодние праздники</a></li>
                    <li><a href="#">Москва и область</a>
                        <div class="sub__links">
                            <ul>
                                <li><a href="#">Отели в Подмосковье на ближайшие выходные</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Санкт-Петербург и область</a></li>
                    <li><a href="#">Карелия</a></li>
                    <li><a href="#">Селигер</a></li>
                    <li>
                        <a href="#">Золотое кольцо</a>
                        <div class="sub__links">
                            <ul>
                                <li><a href="#">Углич</a></li>
                                <li><a href="#">Владимир</a></li>
                                <li><a href="#">Иваново</a></li>
                                <li><a href="#">Кострома</a></li>
                                <li><a href="#">Переславль-Залесский</a></li>
                                <li><a href="#">Ростов</a></li>
                                <li><a href="#">Сергиев Посад</a></li>
                                <li><a href="#">Суздаль</a></li>
                                <li><a href="#">Ярославль</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Юг России</a>
                        <div class="sub__links">
                            <ul>
                                <li>
                                    <a href="#"></a>Адлер</a>
                                </li>
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
                        </div>
                    </li>
                    <li>
                        <a href="#">Ещё</a>
                        <div class="sub__links">
                            <ul>
                                <li>
                                    <a href="#"></a>Крым</a>
                                </li>
                                <li><a href="#">Абхазия</a></li>
                                <li><a href="#">Другие города</a></li>
                                <li><a href="#">Поволжье</a></li>
                                <li><a href="#">Алтай</a></li>
                                <li><a href="#">Байкал</a></li>
                                <li><a href="#">Урал</a></li>
                                <li><a href="#">Сибирь</a></li>
                                <li><a href="#">Популярные санатории</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="bottom__sub-menue sub__menue3">
                <ul>
                    <li><a href="#">Все</a></li>
                    <li><a href="#">Россия</a></li>
                    <li><a href="#">Турция</a></li>
                    <li><a href="#">Европа</a></li>
                    <li><a href="#">Пляжный отдых</a></li>
                    <li><a href="#">Другие страны</a></li>
                    <li><a href="#">Туры на север из СПб</a></li>
                </ul>
            </div>

            <div class="bottom__sub-menue sub__menue4">
                <ul>
                    <li><a href="#">Все</a></li>
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
                    <li>
                        <a href="#"> Ещё</a>
                        <div class="sub__links">
                            <ul>
                                <li><a href="#">Линзмастер</a></li>
                                <li><a href="#">Орматек</a></li>
                                <li><a href="#">Холодильник.РУ</a></li>
                                <li><a href="#">Матрас.ру</a></li>
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
                    </li>
                </ul>
            </div>

            <!-- <div class="bottom__sub-menue sub__menue5">
                <ul>
                    <li><a href="#">Все</a></li>
                    <li><a href="#">Игры</a></li>
                    <li><a href="#">Путешествия</a>
                        <div class="sub__links">
                            <ul>
                                <li><a href="#"> Бронирование отелей</a></li>
                                <li><a href="#">Заказ билетов</a></li>
                                <li><a href="#">Подбор тура</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Для детей</a></li>
                    <li>
                        <a href="#">Для дома</a>
                        <div class="sub__links">
                            <ul>
                                <li><a href="#">Для дома</a></li>
                                <li><a href="#">Для сада</a></li>
                                <li><a href="#">Мебель</a></li>
                                <li><a href="#">Зоомагазины</a></li>
                            </ul>
                        </div>
                    </li>
                    <li> <a href="#">Еда</a></li>
                    <li>
                        <a href="#">Развлечения</a>
                        <div class="sub__links">
                            <ul>
                                <li><a href="#">Книги</a></li>
                                <li><a href="#">Товары для творчества</a></li>
                                <li><a href="#">Спорт</a></li>
                                <li><a href="#">Товары для взрослых</a></li>
                                <li><a href="#">Развлечения</a></li>
                                <li><a href="#">Подарки и цветы</a></li>
                                <li><a href="#">Концерты</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Одежда, обувь, аксессуары</a>
                        <div class="sub__links">
                            <ul>
                                <li><a href="#">Одежда</a></li>
                                <li><a href="#">Ювелирные украшения</a></li>
                                <li><a href="#">Обувь</a></li>
                                <li><a href="#">Аксессуары</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Услуги</a>
                        <div class="sub__links">
                            <ul>
                                <li><a href="#">Образование</a></li>
                                <li><a href="#">Хостинг</a></li>
                                <li><a href="#">Провайдер</a></li>
                                <li><a href="#">Страхование</a></li>
                                <li><a href="#">Кредиты и займы</a></li>
                            </ul>
                        </div>
                    </li>
                    <li> <a href="#">Авто</a></li>
                    <li>
                        <a href="#">Ещё</a>
                        <div class="sub__links">
                            <ul>
                                <li><a href="#">Красота & Здоровье</a></li>
                                <li><a href="#">Электроника и техника</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div> -->

            <div class="bottom__sub-menue sub__menue6">
                <ul>
                    <li><a href="#">Все</a></li>
                    <li><a href="#">Мебель и ремонт</a></li>
                    <li><a href="#">Товары для дома</a></li>
                    <li><a href="#">Бытовая техника и электроника</a></li>
                    <li><a href="#">Здоровье</a></li>
                    <li><a href="#">Продукты питания</a></li>
                    <li><a href="#">Красота</a></li>
                    <li><a href="#">Обувь и одежда</a></li>
                    <li><a href="#">Ещё</a>
                        <div class="sub__links">
                            <ul>
                                <li><a href="#">Товары для детей</a></li>
                                <li><a href="#">Сувенирная продукция</a></li>
                                <li><a href="#">Цветы</a></li>
                                <li><a href="#">Воздушные шары</a></li>
                                <li><a href="#">18+</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="contanier">

                <div class="left__menue">
                    <div class="left__menue-title">


                    </div>
                    <ul>
                        <li class="left__links">
                            <img src="./img/icons/1.png" alt="">
                            <a href="">Красота</a>
                            <ul class="left__submenue">

                                <li><a href="insta.html">Уход за волосами</a></li>
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

                                <li><a href="#">ПШиномонтаж</a></li>
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

                <a href="#header" class="go__top"></a>
                <div class="slider__contanier">
                    <div class="auto__slider">
                        <div class="slider-items"></div>
                        <div class="slider-items"></div>
                        <div class="slider-items"></div>
                    </div>
                </div>

                <!-- navbar end -->

                <div class="cards">
                    <!-- card start -->
                    @foreach($skidki as $val)
                    <div class="main__content">
                        <div class="card__img">
                            <a target="_blank" href="{{$val->sitesUrl}}"><img src="{{$val->imageUrl}}" alt=""></a>
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
                            <span class="shop">Куплено {{$val->count}}</span>
                        </div>
                        <div class="card_price">
                            <a href="#" class="old__price">{{$val->oldPrice}} руб.</a>
                            <a href="#" class="new__price">{{$val->newPrice}} руб.</a>
                        </div>
                    </div>
                    @endforeach
                    <!-- card end -->           

                    
                
                    <div class="contanier__menue-title hotel__title">
                        <a href="#" id="menue__title">Сайты</a>
                        <a href="#" id="menue__title-info">ВСЕ (555)</a>
                    </div>
                      <!-- Swiper -->
                      <div class="swiper-container">
                        <div class="swiper-wrapper">
                        @foreach($sites as $val)
                           <div class="swiper-slide main__content">
                            <div class="card__img">
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
                                <span class="shop">Куплено {{$val->count}}</span>
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
                            <a href="#" id="menue__title">Популярные рестораны </a>
                            <a href="#" id="menue__title-info">ВСЕ (268)</a>
                        </div>
                    </div>
                    <div class="cards services">

                        
                     @foreach($popRestoran as $val)                                   
                        <div class="main__content">
                            <div class="card__img">
                                <a target="_blank" href="{{$val->sitesUrl}}"><img id="restoranImg" style="margin-left:10px" src="{{$val->imageUrl}}" alt=""></a>
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
                                <span class="shop">Куплено {{$val->count}}</span>
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
                    <a href="#" id="menue__title">Отели</a>
                    <a href="#" id="menue__title-info">ВСЕ (555)</a>
                </div>
                <div class="cards__bg">
                    <section class="slider">
                        <img class="hotel__slider-img" src="./img/tur1.jpg">
                        <img class="hotel__slider-img" src="./img/tur2.jpg">
                        <img class="hotel__slider-img" src="./img/tur3.jpg">
                        <img class="hotel__slider-img" src="./img/tur4.jpg">
                        <img class="hotel__slider-img" src="./img/tur1.jpg">
                        <img class="hotel__slider-img" src="./img/tur2.jpg">
                        <img class="hotel__slider-img" src="./img/tur1.jpg">
                        <img class="hotel__slider-img" src="./img/tur2.jpg">
                        <img class="hotel__slider-img" src="./img/tur3.jpg">
                        <img class="hotel__slider-img" src="./img/tur4.jpg">
                        <img class="hotel__slider-img" src="./img/tur1.jpg">
                        <img class="hotel__slider-img" src="./img/tur2.jpg">
                    </section>
                </div>

               

                <div class="contanier__menue-title tur__title">
                    <a href="#" id="menue__title">Туры</a>
                    <a href="#" id="menue__title-info">ВСЕ (555)</a>
                </div>

                <div class="cards tur">

                    <div class="main__content tur__content">
                        <div class="card__img tur__img">
                            <img src="./img/tur1.jpg" alt="">
                            <div class="tur__information">
                                <a href="#" class="tur__location">Пляжный отдых</a>
                                <a href="#" class="tur__suggestions">55 предложений</a>
                            </div>
                        </div>
                    </div>

                    <div class="main__content tur__content">
                        <div class="card__img tur__img">
                            <img src="./img/tur2.jpg" alt="">
                            <div class="tur__information">
                                <a href="#" class="tur__location">Пляжный отдых</a>
                                <a href="#" class="tur__suggestions">55 предложений</a>
                            </div>
                        </div>
                    </div>
                    <div class="main__content tur__content">
                        <div class="card__img tur__img">
                            <img src="./img/tur3.jpg" alt="">
                            <div class="tur__information">
                                <a href="#" class="tur__location">Пляжный отдых</a>
                                <a href="#" class="tur__suggestions">55 предложений</a>
                            </div>
                        </div>
                    </div>

                    <div class="main__content tur__content">
                        <div class="card__img tur__img">
                            <img src="./img/tur4.jpg" alt="">
                            <div class="tur__information">
                                <a href="#" class="tur__location">Пляжный отдых</a>
                                <a href="#" class="tur__suggestions">55 предложений</a>
                            </div>
                        </div>
                    </div>

                    <div class="main__content tur__content">
                        <div class="card__img tur__img">
                            <img src="./img/tur5.jpeg" alt="">
                            <div class="tur__information">
                                <a href="#" class="tur__location">Пляжный отдых</a>
                                <a href="#" class="tur__suggestions">55 предложений</a>
                            </div>
                        </div>
                    </div>

                    <div class="main__content tur__content">
                        <div class="card__img tur__img">
                            <img src="./img/tur1.jpg" alt="">
                            <div class="tur__information">
                                <a href="#" class="tur__location">Пляжный отдых</a>
                                <a href="#" class="tur__suggestions">55 предложений</a>
                            </div>
                        </div>
                    </div>

                </div>
               

                <div class="contanier__menue-title">
                    <a href="#" id="menue__title">Товары по купонам </a>
                    <a href="#" id="menue__title-info">ВСЕ (999)</a>
                </div>

                <div class="cards">

                    
                    <div class="main__content">
                        <div class="card__img">
                            <img src="./img/fa82a77f81f786eaa0efde4b973a5e9b.jpg" alt="">
                            <div class="card__discount big">
                                <a href="#">-70%</a>
                            </div>


                        </div>
                        <div class="card__title">
                            <a href="#">Посещение аквапарка в комплексе «Фэнтази парк»</a>
                        </div>
                        <div class="card__lcation">
                            <span class="metro">Марьино</span>
                            <span class="shop">Куплено 5 090</span>
                        </div>
                        <div class="card_price">
                            <a href="#" class="old__price">1 700 руб.</a>
                            <a href="#" class="new__price">748 руб.</a>
                        </div>
                    </div>
                    <div class="main__content">
                        <div class="card__img">
                            <img src="./img/fa82a77f81f786eaa0efde4b973a5e9b.jpg" alt="">
                            <div class="card__discount big">
                                <a href="#">-70%</a>
                            </div>

                        </div>
                        <div class="card__title">
                            <a href="#">Посещение аквапарка в комплексе «Фэнтази парк»</a>
                        </div>
                        <div class="card__lcation">
                            <span class="metro">Марьино</span>
                            <span class="shop">Куплено 5 090</span>
                        </div>
                        <div class="card_price">
                            <a href="#" class="old__price">1 700 руб.</a>
                            <a href="#" class="new__price">748 руб.</a>
                        </div>
                    </div>
                    
                    <div class="main__content">
                        <div class="card__img">
                            <img src="./img/fa82a77f81f786eaa0efde4b973a5e9b.jpg" alt="">
                            <div class="card__discount average">
                                <a href="#">-50%</a>
                            </div>


                        </div>
                        <div class="card__title">
                            <a href="#">Посещение аквапарка в комплексе «Фэнтази парк»</a>
                        </div>
                        <div class="card__lcation">
                            <span class="metro">Марьино</span>
                            <span class="shop">Куплено 5 090</span>
                        </div>
                        <div class="card_price">
                            <a href="#" class="old__price">1 700 руб.</a>
                            <a href="#" class="new__price">748 руб.</a>
                        </div>
                    </div>

                </div>

                <div class="contanier__menue-title">
                    <a href="#" id="menue__title">Популярные магазины </a>
                    <a href="#" id="menue__title-info">ВСЕ (999)</a>
                </div>

                <div class="cards__bg cards__bg-stores">
                    <div class="contanier__menue-title">
                        <a href="#" id="menue__title">Популярные магазины2 </a>
                        <a href="#" id="menue__title-info">ВСЕ (999)</a>
                    </div>
                    <section class="slider">
                        <img class="hotel__slider-img" src="./img/tur1.jpg">
                        <img class="hotel__slider-img" src="./img/tur2.jpg">
                        <img class="hotel__slider-img" src="./img/tur3.jpg">
                        <img class="hotel__slider-img" src="./img/tur4.jpg">
                        <img class="hotel__slider-img" src="./img/tur1.jpg">
                        <img class="hotel__slider-img" src="./img/tur2.jpg">
                        <img class="hotel__slider-img" src="./img/tur1.jpg">
                        <img class="hotel__slider-img" src="./img/tur2.jpg">
                        <img class="hotel__slider-img" src="./img/tur3.jpg">
                        <img class="hotel__slider-img" src="./img/tur4.jpg">
                        <img class="hotel__slider-img" src="./img/tur1.jpg">
                        <img class="hotel__slider-img" src="./img/tur2.jpg">
                    </section>
                </div>

            </div>

            <footer class="footer" id="footer">
                <div class="container">
                    <div class="d-flex justify-content-around align-items-center flex-wrap">
                        <div class="logo my-2">
                            <img src="https://wave-it.ru/public/public/uploads/settings/logos/GwRbOyuwiX.png">
                        </div>
                        <div class="social my-2">
                            <ul class="d-flex justiofy-content-center ">
                                <li class="mx-2">
                                    <a href="https://www.facebook.com/it.wave.it/" target="_blank">
                                        <div>
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="mx-2">
                                    <a href="https://www.instagram.com/wave_it.ru/" target="_blank">
                                        <div>
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </div>
                                    </a>
            
                                </li>
                                <li class="mx-2">
                                    <a href="https://vk.com/it_wave_it" target="_blank">
                                        <div>
                                            <i class="fa fa-vk" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <ul class="menu my-2">
                            <li>
                                <a href="tel: +79150238800">
                                    <i class="fa fa-mobile mr-1" aria-hidden="true"></i>
                                    +79150238800
                                </a>
                            </li>
                            <li><i class="fa fa-envelope mr-1" aria-hidden="true"></i>info@wave-it.ru</li>
                            <li><i class="fa fa-map-marker mr-1" aria-hidden="true"></i>РФ, г. Москва, ул. Воздвиженка, 10</li>
                        </ul>
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