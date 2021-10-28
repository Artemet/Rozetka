@extends('layout.app')
@section('title', 'rozetka')
@section('content')
    <div class="choice_premium_container">
        <h1>ROZETKA Premium</h1>
        <p>Бесплатная доставка весь год</p>
        <div class="premium_container_part">
            <div class="do_information">
                <div class="do_part_one">
                    <span class="money">34₴<br>Месяц</span>
                </div>
                <div class="do_part_two">
                    <p class="be_premium">Станьте Premium-покупателем</p>
                    <p>399 ₴ <span>/</span> 12 месяцев</p>
                </div>
            </div>
            <button class="premium">Выберите ваш Premium</button>
        </div>
    </div>
    <div class="premium_information_one_container">
        <div class="information_part">
            <i class="far fa-user"></i>
            <h3>более 2 млн</h3>
            <p>улыбок от покупок <br> с Premium</p>
        </div>
        <div class="information_part">
            <i class="fas fa-gift"></i>
            <h3>более 5 млн</h3>
            <p>товаров с <br> преимуществами Premium</p>
        </div>
        <div class="information_part">
            <i class="fas fa-wallet"></i>
            <h3>от 240 ₴ <span>/</span> мес</h3>
            <p>помогает сэкономить <br> доставка Premium</p>
        </div>
    </div>
    <div class="premium_information_two_container">
        <div class="information_part">
            <i class="fas fa-shopping-bag"></i>
            <p>если часто покупаете <br> онлайн</p>
        </div>
        <div class="information_part">
            <i class="fas fa-percentage"></i>
            <p>если любите <br> спецпредложения и <br> ранние скидки</p>
        </div>
        <div class="information_part">
            <i class="fas fa-box"></i>
            <p>если устали каждый раз <br> платить за доставку</p>
        </div>
    </div>
    <div class="premium_benefits_container">
        <h2>Преимущества Premium</h2>
        <div class="benefits_part">
            <i class="fas fa-truck"></i>
            <i class="fas fa-chevron-up"></i>
            {{--fas fa-chevron-down--}}
            <h3>Премиум доставка</h3>
            <p>Бесплатная доставка товаров продавца Rozetka без ограничения <br> количества заказов.</p>
            <p>Для бесплатной доставки заказа весь товар в заказе должен попадать под условие действия <br>
                подписки, т.е. быть отмеченным специальным значком Premium.<br>
                Бесплатная доставка доступна для заказов, которые доставляются по всей территории Украины <br>
                любым способом доставки.<br>
                В Киеве и Одессе сумма заказа Premium должна быть не менее 100 грн, и не менее 500 грн для <br>
                бесплатной доставки в другие населенные пункты. Для бесплатной доставки курьером ROZETKA в <br>
                Софиевской и Петропавловской Борщаговке сумма заказа должна быть не менее 100 грн.<br>
                При выборе доставки в магазины и точки самовывоза ROZETKA доставка бесплатно независимо от <br>
                суммы заказа.<br>
                Подписка активируется в течение 15 минут после ее оплаты и вам становятся доступны все <br>
                преимущества Rozetka Premium.<br>
                Отмена или возврат приобретенной подписки невозможен.</p>
        </div>
        <div class="benefits_part">
            <i class="fas fa-tags"></i>
            <i class="fas fa-chevron-up"></i>
            {{--fas fa-chevron-down--}}
            <h3>Скидки и промокоды</h3>
            <p>Кликайте сюда. Здесь собраны крутые скидки и подарки от наших партнеров.</p>
            <div class="discount_information_part">
                <h3>Rozetka Travel</h3>
                <img src="{{asset('res_css/veb_icon.png')}}" alt="" class="discount_information">
                <a href="">Скидка до 6 000 грн на туры от <br> ROZETKA Travel</a>
                <div class="premium_click">
                    <p></p>
                </div>
            </div>
            <div class="discount_information_part">
                <h3>WOG</h3>
                <img src="{{asset('res_css/discount_information_logos/181553527.jpg')}}" alt="" class="discount_information">
                <a href="">до 1.5 грн/л бонусами на карту <br> Pride за заправку авто</a>
                <div class="premium_click">
                    <p></p>
                </div>
            </div>
            <div class="discount_information_part">
                <h3>Сушия.</h3>
                <img src="{{asset('res_css/discount_information_logos/6742474.png')}}" alt="" class="discount_information">
                <a href="">Ролл в подарок при заказе <br> доставки от Сушия</a>
                <div class="premium_click">
                    <p><?=$available_premium = "Доступно с подпиской Premium";?></p>
                </div>
            </div>
            <div class="discount_information_part">
                <h3>il Molino</h3>
                <img src="{{asset('res_css/discount_information_logos/185747578.jpg')}}" alt="" class="discount_information">
                <a href="">Скидка 150 грн в ресторанах il <br> Molino</a>
                <div class="premium_click">
                    <p><?=$available_premium?></p>
                </div>
            </div>
            <div class="discount_information_part">
                <h3>Сушия</h3>
                <img src="{{asset('res_css/discount_information_logos/6742474.png')}}" alt="" class="discount_information">
                <a href="">Ролл в подарок в ресторане Сушия</a>
                <div class="premium_click">
                    <p><?=$available_premium?></p>
                </div>
            </div>
            <div class="discount_information_part">
                <h3>il Molino</h3>
                <img src="{{asset('res_css/discount_information_logos/185747578.jpg')}}" alt="" class="discount_information">
                <a href="">Пицца в подарок при заказе от <br> службы доставки</a>
                <div class="premium_click">
                    <p><?=$available_premium?></p>
                </div>
            </div>
            <div class="discount_information_part">
                <h3>MEGOGO</h3>
                <img src="{{asset('res_css/discount_information_logos/170826935.jpg')}}" alt="" class="discount_information">
                <a href="">3 месяца предоплаты на <br> «Фильмы» от MEGOGO в подарок!</a>
                <div class="premium_click">
                    <p><?=$available_premium?></p>
                </div>
            </div>
            <div class="discount_information_part">
                <h3>Bolt.</h3>
                <img src="{{asset('res_css/discount_information_logos/1780630.png')}}" alt="" class="discount_information">
                <a href="">Скидка 150 грн на вашу первую <br> поездку с Bolt</a>
                <div class="premium_click">
                    <p><?=$available_premium?></p>
                </div>
            </div>
            <div class="discount_information_part">
                <h3>Mofy.life</h3>
                <img src="{{asset('res_css/discount_information_logos/2400948.png')}}" alt="" class="discount_information">
                <a href="">Скидка 150 грн на фотобуки, <br> фотокартины и сертификаты</a>
                <div class="premium_click">
                    <p><?=$available_premium?></p>
                </div>
            </div>
            <div class="discount_information_part">
                <h3>Bolt</h3>
                <img src="{{asset('res_css/discount_information_logos/1780630.png')}}" alt="" class="discount_information">
                <a href="">Скидка 20% на вашу любую <br> поездку с Bolt</a>
                <div class="premium_click">
                    <p><?=$available_premium?></p>
                </div>
            </div>
            <div class="discount_information_part">
                <h3>UNMOMENTO</h3>
                <img src="{{asset('res_css/discount_information_logos/129236802.jpg')}}" alt="" class="discount_information">
                <a href="">Скидка 200 грн на услуги <br> химчистки</a>
                <div class="premium_click">
                    <p><?=$available_premium?></p>
                </div>
            </div>
            <div class="discount_information_part">
                <h3>Yesfrukt</h3>
                <img src="{{asset('res_css/discount_information_logos/2400947.png')}}" alt="" class="discount_information">
                <a href="">Скидка 75 грн на фрукты и <br> подарочные боксы</a>
                <div class="premium_click">
                    <p><?=$available_premium?></p>
                </div>
            </div>
            <div class="discount_information_part">
                <h3>WOG coffee</h3>
                <img src="{{asset('res_css/discount_information_logos/181553527.jpg')}}" alt="" class="discount_information">
                <a href="">20% бонусами на карту Pride за <br> покупку кофе</a>
                <div class="premium_click">
                    <p><?=$available_premium?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="choice_premium_container">
        <h2>Выберите ваш Premium</h2>
        <div class="choice_part">
            <div class="title_line">
                <h3>Premium пробный</h3>
                <span>ПРОБНЫЙ</span>
            </div>
            <span>3 ₴ / 1 мес</span>
            <button class="agree">Оформить подписку</button>
            <p>Подписка продлевается автоматически на годовой срок и отказаться <br>
                можно в любой момент в личном кабинете</p>
            <a href="#">Подробнее об условиях подписки →</a>
            <img src="{{asset('res_css/premium/premium-subscripttion-dudes.png')}}" alt="">
        </div>
        <div class="choice_premium">
            <div class="choice_part">
                <div class="title_line">
                    <h3>Premium трехмесячный</h3>
                </div>
                <span>149 ₴ / 3 мес</span>
                <button class="agree">Оформить подписку</button>
                <p>Подписка продлевается автоматически и отказаться <br> можно в любой момент в личном кабинете</p>
                <a href="#">Подробнее об условиях подписки →</a>
            </div>
            <div class="choice_part">
                <div class="title_line">
                    <h3>Premium годовой</h3>
                    <span>ТОП-ВЫГОДА</span>
                </div>
                <span>399 ₴ / 12 мес</span>
                <button class="agree">Оформить подписку</button>
                <p>Подписка продлевается автоматически и отказаться можно в любой момент в личном кабинете</p>
                <a href="#">Подробнее об условиях подписки →</a>
            </div>
        </div>
    </div>
    <a href="#">Подробнее об условиях подписки →</a>
    <img src="{{asset('res_css/premium/premium-subscripttion-dudes.png')}}" alt="">
@endsection
