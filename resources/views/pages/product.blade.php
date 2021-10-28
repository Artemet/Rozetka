@extends('layout.app')
@section('title', 'rozetka')
@section('content')
    <div class="choice_href_line">
        <a href=""><i class="fas fa-home"></i></a>
        <i class="fas fa-chevron-right"></i>
        <a href="">Товары для дома</a>
        <i class="fas fa-chevron-right"></i>
        <a href="">Мебель</a>
        <i class="fas fa-chevron-right"></i>
        <a href="">Геймерские кресла</a>
        <i class="fas fa-chevron-right"></i>
        <a href="">Геймерские кресла GamePro</a>
        <i class="fas fa-chevron-right"></i>
    </div>
    <h1 class="product">Кресло игровое GamePro Hero RGB Black (GC-700-Black)</h1>
    <div class="reviews">
        @for($stars = 0; $stars < 5; $stars++)
            <i class='fas fa-star'></i>
        @endfor
        <a href=""><?=$number_reviews = " ".+8;?> отзывов</a>
    </div>
    <div class="choice_product_information">
        <h2 class="start_choice">Все о товаре</h2>
        <div class="part_h2">
            <h2>Характеристики</h2>
        </div>
        <div class="part_h2">
            <h2>Отзывы<span><?=$number_reviews?></span></h2>
        </div>
        <div class="part_h2">
            <h2>Вопросы<span> 11</span></h2>
        </div>
        <div class="part_h2">
            <h2>Видео</h2>
        </div>
        <div class="part_h2">
            <h2>Фото</h2>
        </div>
        <div class="part_h2">
            <h2>Покупают вместе</h2>
        </div>
    </div>
    <div class="product_container">
        <div class="information_box">
            <div class="product_preview">
                <div class="choice_img">
                    <div class="img" onmouseover="img_change(this)">
                        <img src="{{asset('site/140996700.jpg')}}" alt="">
                    </div>
                    <div class="img" onmouseover="img_change(this)">
                        <img src="{{asset('site/140996720.jpg')}}" alt="">
                    </div>
                    <div class="img" onmouseover="img_change(this)">
                        <img src="{{asset('site/140996724.jpg')}}" alt="">
                    </div>
                    <div class="img" onmouseover="img_change(this)">
                        <img src="{{asset('site/140996731.jpg')}}" alt="">
                    </div>
                    <div class="img" onmouseover="img_change(this)">
                        <img src="{{asset('site/140996740.jpg')}}" alt="">
                    </div>
                    <div class="img" onmouseover="img_change(this)">
                        <img src="{{asset('site/140996749.jpg')}}" alt="">
                    </div>
                    <div class="img" onmouseover="img_change(this)">
                        <img src="{{asset('site/140996760.jpg')}}" alt="">
                    </div>
                    <div class="img" onmouseover="img_change(this)">
                        <img src="{{asset('site/140996768.jpg')}}" alt="">
                    </div>
                    <div class="img" onmouseover="img_change(this)">
                        <img src="{{asset('site/140996794.jpg')}}" alt="">
                    </div>
                    <div class="img" onmouseover="img_change(this)">
                        <img src="{{asset('site/140996802.jpg')}}" alt="">
                    </div>
                </div>
                <div class="main_choice">
                    <img src="{{asset('site/140996700.jpg')}}" alt="" class="main_img">
                </div>
            </div>
            <div class="part_information">
                <h2>Регулировки:</h2>
                <div class="block_information">
                    <a href="">Высота подлокотников</a>
                    <a href="">Высота поясничной подушки</a>
                    <a href="">Высота сиденья</a>
                    <a href="">Жесткость качания</a>
                    <a href="">Угол наклона спинки</a>
                    <a href="">Угол поворота подлокотников</a>
                </div>
            </div>
            <div class="part_information_two">
                <p>Размеры сиденья 40 х 51 см</p>
                <a href="">Подробнее о товаре</a>
            </div>
        </div>
        <div class="buy_box">
            <button class="information">
                <i class="far fa-check-square"></i>
                Есть в наличии
            </button>
            <div class="basket_choice">
                <fieldset>
                    <legend class="old_price">7 999₴</legend>
                    <span class="price">6 999₴</span>
                    <button class="just_buy"><i class="fas fa-shopping-basket"></i>Купить</button>
                    <button class="credit_buy">Купить в кредит</button>
                    <i class="fas fa-balance-scale"></i>
                    <i class="far fa-heart heart"></i>
                </fieldset>
                <div class="premium_information_one">
                    <div class="circle">
                        <span>Б</span>
                    </div>
                    + 69 бонусных ₴
                    при покупке этого товара
                    <a href= "#">для владельцев Premium</a>
                </div>
                <div class="buy_information">
                    <img src="{{asset('res_css/product/195695781.png')}}" alt=""
                         class="buy_information">
                    <img src="{{asset('res_css/product/195705300.png')}}" alt=""
                         class="buy_information">
                    <img src="{{asset('res_css/product/195695730.png')}}" alt=""
                         class="buy_information">
                    <img src="{{asset('res_css/product/195695805.png')}}" alt=""
                         class="buy_information">
                    <img src="{{asset('res_css/product/195705380.png')}}" alt=""
                         class="buy_information">
                    <img src="{{asset('res_css/product/227230361.jpg')}}" alt=""
                         class="buy_information percent">
                    <div class="buy_information">
                        <div class="box">
                            <i class="fas fa-box-open"></i>
                            <p>РАСПАКОВКА</p>
                            <span>100</span>
                            <span class="b">Б</span>
                        </div>
                    </div>
                </div>
                <div class="buy_choice">
                    <div class="choice_part">
                        <label for="choice_one" class="information">
                            <span class="line">
                                <input type="checkbox">
                                <p id="choice_one">Пробная покупка на 365 дней</p>
                            </span>
                            <label for="choice_addition_one" class="information">
                                <span class="line_under">
                                    <i class="far fa-circle just_circle" onclick="ok_button(this)"></i>
{{--                                    fas fa-check-circle--}}
                                    <p id="choice_addition_one">Пробная покупка на 365 дней (5001-7500)
                                    <span class="price_two">379 ₴</span></p>
                                </span>
                            </label>
                        </label>
                    </div>
                    <div class="choice_part">
                        <label for="choice_two">
                            <span class="line">
                                <input type="checkbox">
                            <p id="choice_two">Дистанционная настройка ПК</p>
                            </span>
                            <label for="choice_addition_two">
                                <span class="line_under">
                                    <i class="far fa-circle just_circle" onclick="ok_button(this)"></i>
{{--                                fas fa-check-circle--}}
                                    <p id="choice_addition_two">Дистанционная настройка ПК для геймеров
                                    <span class="price_two">299 ₴</span></p>
                                </span>
                            </label>
                        </label>
                    </div>
                </div>
            </div>
            <div class="salesman_information">
                <p>Продавец: <span>Rozetka</span></p>
                <img src="{{asset('res_css/veb_name.jpg')}}" alt="">
            </div>
            <img src="{{asset('res_css/product/buy_information/percent.jpg')}}" alt="" class="percent">
            <div class="delivery_container">
                <p class="information_delivery">Доставка в: <a href="#">Київ</a></p>
                <div class="premium_information_two">
                    <span class="price_two">399₴</span>
                    <div class="premium_information_block">
                        <div class="part">
                            <p>ROZETKA</p>
                            <p>Premium годовой</p>
                        </div>
                        <div class="part">
                            <p class="information">Бесплатная доставка весь год</p>
                        </div>
                    </div>
                    <a href="#">
                        <button class="premium">Попробовать Premium</button>
                    </a>
                </div>
                <div class="delivery_part">
                    <img src="{{asset('res_css/veb_icon.png')}}" alt="">
                    <p>Самовывоз из точек выдачи <br> Rozetka</p>
                    <a href="#">Показать на карте</a>
                    <span>Забрать завтра с 10:00</span>
                    <span class="text_free">Бесплатно</span>
                </div>
                <div class="delivery_part">
                    <i class="fas fa-store"></i>
                    <p>Самовывоз из отделений почтовых <br> операторов</p>
                    <a href="#">Показать на карте</a>
                    <span>Отправим завтра</span>
                    <span class="price_two">125 ₴</span>
                </div>
                <div class="delivery_part">
                    <i class="fas fa-box"></i>
                    <p>Доставка курьером</p>
                    <span>Rozetka</span>
                    <span>Доставка 10 октября с 10:00</span>
                    <span class="price_two">59 ₴</span>
                </div>
            </div>
            <div class="general_information">
                <div class="general_information_part">
                    <i class="fas fa-wallet"></i>
                    <p><span>Оплата.</span> Оплата при получении товара, Картой онлайн, Google Pay,
                        Безналичными для юридических лиц, Безналичными для <br>
                        физических лиц, PrivatPay, Apple Pay, Оплата картой в<br>
                        отделении, Кредит, Оплата частями</p>
                </div>
                <div class="general_information_part">
                    <i class="far fa-check-square"></i>
                    <p><span>Гарантия.</span> 12 месяцев Обмен/возврат товара в течение 14 дней</p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/product.js')}}"></script>
@endsection
