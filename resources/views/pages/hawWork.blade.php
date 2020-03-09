@extends('layout.singlPagesMaket')

@section('header')
    @parent
@endsection

@section('menu')
    @parent
@endsection

@section('content')
    <div class="how_container">

        <li class="breadcrumbs_item">
            <a class="breadcrumbs_item_list" href="{{route('home')}}">Главная</a>
            <span class ="span-arrow">&#8594;</span>
        </li>
        <li class="breadcrumbs_item">
            <span>Как работает ??</span>
        </li>


        <div class="how">

            <div class="how_context">
                <h1 class="how_title">
                    Как работает Скидкирус
                </h1>
                <p class="how_text">
                    Скидкирус — крупнейший в России онлайн-сервис разумного потребления.
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
                    Почему в Скидкирус такие большие скидки
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
                    Cashback Скидкирус
                </h1>
                <p class="how_text">
                    C Скидкирус можно покупать в онлайн или оффлайн-магазинах и возвращать часть суммы назад.<br>
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
                            на сайте Скидкирус и перейдите в понравившийся магазин
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
                            Купите купон на  или выведите деньги
                        </p>

                    </div>
                </div>
            </div>

            <div class="how_context">
                <div class="mobile">
                    <div class="mobile_first_section">
                        <h1 class="how_title_second">
                            Мобильное приложение
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
@endsection

@section('footer')
    @parent
@endsection
