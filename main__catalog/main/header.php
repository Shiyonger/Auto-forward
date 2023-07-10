<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>
    <?$APPLICATION->ShowHead();?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?$APPLICATION->ShowTitle();?></title>
</head>
<body>

<div class="page">
    <header class="header">
        <div class="header__container">
            <div class="header__inner">
                <div class="header__left">
                    <div class="header__logo">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/images/images/auto-forward_03.png" alt="">
                        <p class="logo__text">Интернет-магазин товаров для автомобиля</p>
                    </div>
                </div>
                <div class="header__center">
                    <nav class="nav" id="nav">
                        <a class="nav__link" href="#">Главная</a>
                        <a class="nav__link" href="#">Отзывы</a>
                        <a class="nav__link" href="#">Каталог</a>
                        <a class="nav__link" href="#">Контакты</a>
                    </nav>
                </div>
                <div class="header__right">
                    <div class="header__right-one">
                        <p class="header__phone">+7 912 608 39 64</p>
                        <img class="phone__img" src="<?=SITE_TEMPLATE_PATH?>/img/icon-1_03.png">
                        <button class="header__btn">Связаться</button>
                    </div>
                    <div class="header__right-two">
                        <p class="sign_in">Регистрация</p>
                        <img class="login__icon" src="<?=SITE_TEMPLATE_PATH?>/img/icon-2_03.png">
                        <p class="log_in">Войти</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="search">
        <div class="container">
            <div class="search__btn-one">
                <button class="button"><span></span><span></span><span></span><p class="btn__text">Каталог</p></button>
            </div>
            <div class="search-input">
                <input class="search__input" type="text" placeholder="Я ищу..">
            </div>
            <div class="search__btn-two">
                <button class="button-two">Искать</button>
            </div>
            <div class="cart">
                <div class="cart__img">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/images/cart_03.png">
                </div>
                <p class="cart__notif">1</p>
                <p class="cart__text">Корзина</p>
            </div>
        </div>
    </div>
    <header class="mobile__header">
        <div class="mobile__container">
            <div class="mobile__header__toggle"><span></span><span></span><span></span></div>
            <div class="mobile__header__login"><img class="mobile__header__img" src="<?=SITE_TEMPLATE_PATH?>/img/icon-2_03.png"></div>
            <div class="mobile__header__logo"><img class="mobile__header__img logo" src="<?=SITE_TEMPLATE_PATH?>/img/images/images/auto-forward_03.png"></div>
            <div class="mobile__header__search"><img class="mobile__header__img" src="<?=SITE_TEMPLATE_PATH?>/img/search_03.png"></div>
            <div class="mobile__header__cart"><img class="mobile__header__img" src="<?=SITE_TEMPLATE_PATH?>/img/images/cart_03.png"></div>
        </div>
    </header>
    <div class="services">
        <div class="services__container">
            <div class="service__item">
                <img class="service__img" src="<?=SITE_TEMPLATE_PATH?>/img/new_03.png">
                <p class="service__text">Новинки</p>
            </div>
            <div class="service__item">
                <img class="service__img" src="<?=SITE_TEMPLATE_PATH?>/img/auto-elec_03.png">
                <p class="service__text">Автоэлектрика</p>
            </div>
            <div class="service__item">
                <img class="service__img" src="<?=SITE_TEMPLATE_PATH?>/img/accessories_03.png">
                <p class="service__text">Автоаксессуары</p>
            </div>
            <div class="service__item">
                <img class="service__img" src="<?=SITE_TEMPLATE_PATH?>/img/tools_03.png">
                <p class="service__text">Инструмент</p>
            </div>
            <div class="service__items__second">
                <div class="service__item">
                    <img class="service__img" src="<?=SITE_TEMPLATE_PATH?>/img/auto_light_03.png">
                    <p class="service__text">Автосвет</p>
                </div>
                <div class="service__item">
                    <img class="service__img" src="<?=SITE_TEMPLATE_PATH?>/img/auto_chemistry_03.png">
                    <p class="service__text">Автохимия</p>
                </div>
                <div class="service__item">
                    <img class="service__img" src="<?=SITE_TEMPLATE_PATH?>/img/auto_electron_03.png">
                    <p class="service__text">Автоэлектроника</p>
                </div>
                <div class="service__item">
                    <img class="service__img" src="<?=SITE_TEMPLATE_PATH?>/img/caps_03.png">
                    <p class="service__text">Колпаки</p>
                </div>
            </div>
        </div>
    </div>
    <section class="section__new">
        <div class="container section">
            <h1 class="new__title">Новинки</h1>
            <div class="new">
                <div class="new__item">
                    <div>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog-item_03.png">
                        <p class="new__text">Фара светодиодная CH031 144W ближний свет</p>
                        <p class="new__artic">Артикул: 5184612</p>
                        <p class="new__price">1648 руб. / шт.</p>
                    </div>
                    <div class="new__flex">
                        <img class="new__cart" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-cart_03.png">
                        <div class="new__heart">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/heart_03.png">
                        </div>
                        <div class="quantity">
                            <img class="mini plus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-plus_03.png">
                            <p class="quantity__text">1</p>
                            <img class="mini minus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-minus_03.png">
                        </div>
                    </div>
                </div>
                <div class="new__item">
                    <div>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog-item_03.png">
                        <p class="new__text">Фара светодиодная CH031 144W ближний свет</p>
                        <p class="new__artic">Артикул: 5184612</p>
                        <p class="new__price">1648 руб. / шт.</p>
                    </div>
                    <div class="new__flex">
                        <img class="new__cart" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-cart_03.png">
                        <div class="new__heart">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/heart_03.png">
                        </div>
                        <div class="quantity">
                            <img class="mini plus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-plus_03.png">
                            <p class="quantity__text">1</p>
                            <img class="mini minus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-minus_03.png">
                        </div>
                    </div>
                </div>
                <div class="new__item">
                    <div>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog-item_03.png">
                        <p class="new__text">Фара светодиодная CH031 144W ближний свет</p>
                        <p class="new__artic">Артикул: 5184612</p>
                        <p class="new__price">1648 руб. / шт.</p>
                    </div>
                    <div class="new__flex">
                        <img class="new__cart" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-cart_03.png">
                        <div class="new__heart">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/heart_03.png">
                        </div>
                        <div class="quantity">
                            <img class="mini plus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-plus_03.png">
                            <p class="quantity__text">1</p>
                            <img class="mini minus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-minus_03.png">
                        </div>
                    </div>
                </div>
                <div class="new__item">
                    <div>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog-item_03.png">
                        <p class="new__text">Фара светодиодная CH031 144W ближний свет</p>
                        <p class="new__artic">Артикул: 5184612</p>
                        <p class="new__price">1648 руб. / шт.</p>
                    </div>
                    <div class="new__flex">
                        <img class="new__cart" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-cart_03.png">
                        <div class="new__heart">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/heart_03.png">
                        </div>
                        <div class="quantity">
                            <img class="mini plus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-plus_03.png">
                            <p class="quantity__text">1</p>
                            <img class="mini minus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-minus_03.png">
                        </div>
                    </div>
                </div>
                <div class="new__item last">
                    <div>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog-item_03.png">
                        <p class="new__text">Фара светодиодная CH031 144W ближний свет</p>
                        <p class="new__artic">Артикул: 5184612</p>
                        <p class="new__price">1648 руб. / шт.</p>
                    </div>
                    <div class="new__flex">
                        <img class="new__cart" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-cart_03.png">
                        <div class="new__heart">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/heart_03.png">
                        </div>
                        <div class="quantity">
                            <img class="mini plus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-plus_03.png">
                            <p class="quantity__text">1</p>
                            <img class="mini minus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-minus_03.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="new__second">
                <div class="new__item sec">
                    <div>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog-item_03.png">
                        <p class="new__text">Фара светодиодная CH031 144W ближний свет</p>
                        <p class="new__artic">Артикул: 5184612</p>
                        <p class="new__price">1648 руб. / шт.</p>
                    </div>
                    <div class="new__flex">
                        <img class="new__cart" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-cart_03.png">
                        <div class="new__heart">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/heart_03.png">
                        </div>
                        <div class="quantity">
                            <img class="mini plus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-plus_03.png">
                            <p class="quantity__text">1</p>
                            <img class="mini minus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-minus_03.png">
                        </div>
                    </div>
                </div>
                <div class="new__item sec">
                    <div>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog-item_03.png">
                        <p class="new__text">Фара светодиодная CH031 144W ближний свет</p>
                        <p class="new__artic">Артикул: 5184612</p>
                        <p class="new__price">1648 руб. / шт.</p>
                    </div>
                    <div class="new__flex">
                        <img class="new__cart" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-cart_03.png">
                        <div class="new__heart">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/heart_03.png">
                        </div>
                        <div class="quantity">
                            <img class="mini plus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-plus_03.png">
                            <p class="quantity__text">1</p>
                            <img class="mini minus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-minus_03.png">
                        </div>
                    </div>
                </div>
                <div class="new__item sec">
                    <div>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog-item_03.png">
                        <p class="new__text">Фара светодиодная CH031 144W ближний свет</p>
                        <p class="new__artic">Артикул: 5184612</p>
                        <p class="new__price">1648 руб. / шт.</p>
                    </div>
                    <div class="new__flex">
                        <img class="new__cart" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-cart_03.png">
                        <div class="new__heart">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/heart_03.png">
                        </div>
                        <div class="quantity">
                            <img class="mini plus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-plus_03.png">
                            <p class="quantity__text">1</p>
                            <img class="mini minus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-minus_03.png">
                        </div>
                    </div>
                </div>
                <div class="new__item sec">
                    <div>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/catalog-item_03.png">
                        <p class="new__text">Фара светодиодная CH031 144W ближний свет</p>
                        <p class="new__artic">Артикул: 5184612</p>
                        <p class="new__price">1648 руб. / шт.</p>
                    </div>
                    <div class="new__flex">
                        <img class="new__cart" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-cart_03.png">
                        <div class="new__heart">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/heart_03.png">
                        </div>
                        <div class="quantity">
                            <img class="mini plus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-plus_03.png">
                            <p class="quantity__text">1</p>
                            <img class="mini minus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-minus_03.png">
                        </div>
                    </div>
                </div>
                <div class="new__item sec last">
                    <div class="new__plus">
                        <img class="big__plus" src="<?=SITE_TEMPLATE_PATH?>/img/plus_03.png">
                        <p class="plus__title">Показать ещё 9</p>
                        <p class="plus__text">Показано 9 из 46</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mobile__section__new">
        <div class="mobile__container section">
            <h1 class="new__title">Новинки</h1>
            <div class="new">
                <div class="new__item">
                    <div>
                        <img class="new__item__img" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-item_03.png">
                        <p class="new__text">Фара светодиодная CH031 144W ближний свет</p>
                        <p class="new__artic">Артикул: 5184612</p>
                        <p class="new__price">1648 руб. / шт.</p>
                    </div>
                    <div class="new__flex">
                        <img class="new__cart" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-cart_03.png">
                        <div class="quantity">
                            <img class="mini plus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-plus_03.png">
                            <p class="quantity__text">1</p>
                            <img class="mini minus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-minus_03.png">
                        </div>
                        <div class="new__heart">
                            <img src="main/img/heart_03.png">
                        </div>
                    </div>
                </div>
                <div class="new__item">
                    <div>
                        <img class="new__item__img" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-item_03.png">
                        <p class="new__text">Фара светодиодная CH031 144W ближний свет</p>
                        <p class="new__artic">Артикул: 5184612</p>
                        <p class="new__price">1648 руб. / шт.</p>
                    </div>
                    <div class="new__flex">
                        <img class="new__cart" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-cart_03.png">
                        <div class="quantity">
                            <img class="mini plus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-plus_03.png">
                            <p class="quantity__text">1</p>
                            <img class="mini minus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-minus_03.png">
                        </div>
                        <div class="new__heart">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/heart_03.png">
                        </div>
                    </div>
                </div>
                <div class="new__item">
                    <div>
                        <img class="new__item__img" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-item_03.png">
                        <p class="new__text">Фара светодиодная CH031 144W ближний свет</p>
                        <p class="new__artic">Артикул: 5184612</p>
                        <p class="new__price">1648 руб. / шт.</p>
                    </div>
                    <div class="new__flex">
                        <img class="new__cart" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-cart_03.png">
                        <div class="quantity">
                            <img class="mini plus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-plus_03.png">
                            <p class="quantity__text">1</p>
                            <img class="mini minus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-minus_03.png">
                        </div>
                        <div class="new__heart">
                            <img src="main/img/heart_03.png">
                        </div>
                    </div>
                </div>
                <div class="new__item">
                    <div>
                        <img class="new__item__img" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-item_03.png">
                        <p class="new__text">Фара светодиодная CH031 144W ближний свет</p>
                        <p class="new__artic">Артикул: 5184612</p>
                        <p class="new__price">1648 руб. / шт.</p>
                    </div>
                    <div class="new__flex">
                        <img class="new__cart" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-cart_03.png">
                        <div class="quantity">
                            <img class="mini plus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-plus_03.png">
                            <p class="quantity__text">1</p>
                            <img class="mini minus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-minus_03.png">
                        </div>
                        <div class="new__heart">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/heart_03.png">
                        </div>
                    </div>
                </div>
                <div class="new__item last">
                    <div>
                        <img class="new__item__img" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-item_03.png">
                        <p class="new__text">Фара светодиодная CH031 144W ближний свет</p>
                        <p class="new__artic">Артикул: 5184612</p>
                        <p class="new__price">1648 руб. / шт.</p>
                    </div>
                    <div class="new__flex">
                        <img class="new__cart" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-cart_03.png">
                        <div class="quantity">
                            <img class="mini plus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-plus_03.png">
                            <p class="quantity__text">1</p>
                            <img class="mini minus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-minus_03.png">
                        </div>
                        <div class="new__heart">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/heart_03.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="new__second">
                <div class="new__item sec">
                    <div>
                        <img class="new__item__img" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-item_03.png">
                        <p class="new__text">Фара светодиодная CH031 144W ближний свет</p>
                        <p class="new__artic">Артикул: 5184612</p>
                        <p class="new__price">1648 руб. / шт.</p>
                    </div>
                    <div class="new__flex">
                        <img class="new__cart" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-cart_03.png">
                        <div class="quantity">
                            <img class="mini plus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-plus_03.png">
                            <p class="quantity__text">1</p>
                            <img class="mini minus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-minus_03.png">
                        </div>
                        <div class="new__heart">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/heart_03.png">
                        </div>
                    </div>
                </div>
                <div class="new__item sec">
                    <div>
                        <img class="new__item__img" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-item_03.png">
                        <p class="new__text">Фара светодиодная CH031 144W ближний свет</p>
                        <p class="new__artic">Артикул: 5184612</p>
                        <p class="new__price">1648 руб. / шт.</p>
                    </div>
                    <div class="new__flex">
                        <img class="new__cart" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-cart_03.png">
                        <div class="quantity">
                            <img class="mini plus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-plus_03.png">
                            <p class="quantity__text">1</p>
                            <img class="mini minus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-minus_03.png">
                        </div>
                        <div class="new__heart">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/heart_03.png">
                        </div>
                    </div>
                </div>
                <div class="new__item sec">
                    <div>
                        <img class="new__item__img" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-item_03.png">
                        <p class="new__text">Фара светодиодная CH031 144W ближний свет</p>
                        <p class="new__artic">Артикул: 5184612</p>
                        <p class="new__price">1648 руб. / шт.</p>
                    </div>
                    <div class="new__flex">
                        <img class="new__cart" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-cart_03.png">
                        <div class="quantity">
                            <img class="mini plus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-plus_03.png">
                            <p class="quantity__text">1</p>
                            <img class="mini minus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-minus_03.png">
                        </div>
                        <div class="new__heart">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/heart_03.png">
                        </div>
                    </div>
                </div>
                <div class="new__item sec">
                    <div>
                        <img class="new__item__img" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-item_03.png">
                        <p class="new__text">Фара светодиодная CH031 144W ближний свет</p>
                        <p class="new__artic">Артикул: 5184612</p>
                        <p class="new__price">1648 руб. / шт.</p>
                    </div>
                    <div class="new__flex">
                        <img class="new__cart" src="<?=SITE_TEMPLATE_PATH?>/img/catalog-cart_03.png">
                        <div class="quantity">
                            <img class="mini plus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-plus_03.png">
                            <p class="quantity__text">1</p>
                            <img class="mini minus" src="<?=SITE_TEMPLATE_PATH?>/img/mini-minus_03.png">
                        </div>
                        <div class="new__heart">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/heart_03.png">
                        </div>
                    </div>
                </div>
                <div class="new__item sec last">
                    <div class="new__plus">
                        <img class="big__plus" src="<?=SITE_TEMPLATE_PATH?>/img/plus_03.png">
                        <p class="plus__title">Показать ещё 9</p>
                        <p class="plus__text">Показано 9 из 46</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section__catalog">
        <div class="catalog__container">
            <h1 class="section__title">Каталог товаров</h1>
            <div class="catalog">
                <div class="catalog__item firste">
                    <img class="catalog__img" src="<?=SITE_TEMPLATE_PATH?>/img/new-2_03.png">
                    <h3 class="catalog__title">Новинки</h3>
                </div>
                <div class="catalog__item">
                    <img class="catalog__img" src="<?=SITE_TEMPLATE_PATH?>/img/auto-elec-2_03.png">
                    <h3 class="catalog__title">Автоэлектрика</h3>
                    <div class="catalog__content">
                        <p class="item">Жгуты проводов</p>
                        <p class="item">Колодки</p>
                        <p class="item">Клеммы</p>
                        <p class="item">Тумблеры</p>
                        <p class="item">Провода</p>
                        <p class="item">Провода АКБ</p>
                        <p class="item">Разное</p>
                        <p class="item">Термоусадка</p>
                    </div>
                </div>
                <div class="catalog__item">
                    <img class="catalog__img" src="<?=SITE_TEMPLATE_PATH?>/img/accessories-2_03.png">
                    <h3 class="catalog__title">Автоаксессуары</h3>
                    <div class="catalog__content">
                        <p class="item">Антены</p>
                        <p class="item">Ароматизаторы</p>
                        <p class="item">Брелоки</p>
                        <p class="item">Брызговики</p>
                        <p class="item">Все для детей</p>
                        <p class="item">Газовые плиты,горелки,товары для туризма</p>
                        <a class="more">Еще</a>
                    </div>
                </div>
                <div class="catalog__item laset">
                    <img class="catalog__img" src="<?=SITE_TEMPLATE_PATH?>/img/auto_light-2_03.png">
                    <h3 class="catalog__title">Автосвет</h3>
                    <div class="catalog__content">
                        <p class="item">Светодиоды диалуч</p>
                        <p class="item">Светодиоды в головной свет</p>
                        <p class="item">Дневные ходовые огни</p>
                        <p class="item">Ксенон</p>
                        <p class="item">Лампы AVS</p>
                        <p class="item">Лампы BOCXOD</p>
                        <p class="item">Лампы KOITO</p>
                        <a class="more">Еще</a>
                    </div>
                </div>
            </div>
            <div class="catalog-two">
                <div class="catalog__item firste second">
                    <img class="catalog__img" src="<?=SITE_TEMPLATE_PATH?>/img/auto_chemistry-2_03.png">
                    <h3 class="catalog__title">Автохимия</h3>
                    <div class="catalog__content">
                        <p class="item">Антифриз,тосол,спец. жидкости</p>
                        <p class="item">Жидкая резина</p>
                        <p class="item">Зимний ассортимент</p>
                        <p class="item">Клей,герметик,холодная сварка</p>
                        <p class="item">Лакокрасочные материалы</p>
                        <p class="item">Присадки</p>
                        <p class="item">Смазки,жидкие ключи</p>
                        <a class="more">Еще</a>
                    </div>
                </div>
                <div class="catalog__item second">
                    <img class="catalog__img" src="<?=SITE_TEMPLATE_PATH?>/img/auto_electron-2_03.png">
                    <h3 class="catalog__title">Автоэлектроника</h3>
                    <div class="catalog__content">
                        <p class="item">Видеорегистраторы</p>
                        <p class="item">Камеры,мониторы</p>
                        <p class="item">Карты памяти</p>
                        <p class="item">Магнитолы</p>
                        <p class="item">Акустика</p>
                        <p class="item">Комплектующие</p>
                        <p class="item">Парктроники</p>
                        <p class="item">Радар-детекторы</p>
                        <p class="item">Разное</p>
                    </div>
                </div>
                <div class="catalog__item second">
                    <img class="catalog__img" src="<?=SITE_TEMPLATE_PATH?>/img/tools-2_03.png">
                    <h3 class="catalog__title">Инструмент</h3>
                    <div class="catalog__content">
                        <p class="item">Инструмент</p>
                        <p class="item">Наборы инструмента</p>
                        <p class="item">Отвертки</p>
                        <p class="item">Пассатижи</p>
                        <p class="item">Измерительный инструмент</p>
                        <p class="item">Пневмоинструмент</p>
                        <p class="item">Разное</p>
                        <p class="item">Спец. инструмент</p>
                    </div>
                </div>
                <div class="catalog__item second laset">
                    <img class="catalog__img" src="<?=SITE_TEMPLATE_PATH?>/img/caps-2_03.png">
                    <h3 class="catalog__title">Колпаки</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="mobile__section__catalog">
        <div class="mobile__container catalog">
            <h1 class="section__title">Каталог товаров</h1>
            <div class="catalog__item__wrap">
                <div class="catalog__item">
                    <img class="catalog__img" src="<?=SITE_TEMPLATE_PATH?>/img/new-2_03.png">
                    <h3 class="catalog__title">Новинки</h3>
                </div>
                <div class="catalog__item elec">
                    <img class="catalog__img" src="<?=SITE_TEMPLATE_PATH?>/img/auto-elec-2_03.png">
                    <h3 class="catalog__title">Автоэлектрика</h3>
                    <div class="catalog__content">
                        <p class="item">Жгуты проводов</p>
                        <p class="item">Колодки</p>
                        <p class="item">Клеммы</p>
                        <p class="item">Тумблеры</p>
                        <p class="item">Провода</p>
                        <p class="item">Провода АКБ</p>
                        <p class="item">Разное</p>
                        <p class="item">Термоусадка</p>
                    </div>
                </div>
                <div class="catalog__item">
                    <img class="catalog__img" src="<?=SITE_TEMPLATE_PATH?>/img/accessories-2_03.png">
                    <h3 class="catalog__title">Автоаксессуары</h3>
                    <div class="catalog__content">
                        <p class="item">Антены</p>
                        <p class="item">Ароматизаторы</p>
                        <p class="item">Брелоки</p>
                        <p class="item">Брызговики</p>
                        <p class="item">Все для детей</p>
                        <p class="item">Газовые плиты,горелки,товары для туризма</p>
                        <a class="more">Еще</a>
                    </div>
                </div>
            </div>
            <div class="catalog__item__wrap__second">
                <div class="catalog__item laset">
                    <img class="catalog__img" src="<?=SITE_TEMPLATE_PATH?>/img/auto_light-2_03.png">
                    <h3 class="catalog__title">Автосвет</h3>
                    <div class="catalog__content">
                        <p class="item">Светодиоды диалуч</p>
                        <p class="item">Светодиоды в головной свет</p>
                        <p class="item">Дневные ходовые огни</p>
                        <p class="item">Ксенон</p>
                        <p class="item">Лампы AVS</p>
                        <p class="item">Лампы BOCXOD</p>
                        <p class="item">Лампы KOITO</p>
                        <a class="more">Еще</a>
                    </div>
                </div>
                <div class="catalog__item firste second">
                    <img class="catalog__img" src="<?=SITE_TEMPLATE_PATH?>/img/auto_chemistry-2_03.png">
                    <h3 class="catalog__title">Автохимия</h3>
                    <div class="catalog__content">
                        <p class="item">Антифриз, тосол, спец. жидкости</p>
                        <p class="item">Жидкая резина</p>
                        <p class="item">Зимний ассортимент</p>
                        <p class="item">Клей, герметик, холодная сварка</p>
                        <p class="item">Лакокрасочные материалы</p>
                        <p class="item">Присадки</p>
                        <p class="item">Смазки, жидкие ключи</p>
                        <a class="more">Еще</a>
                    </div>
                </div>
                <div class="catalog__item second">
                    <img class="catalog__img" src="<?=SITE_TEMPLATE_PATH?>/img/auto_electron-2_03.png">
                    <h3 class="catalog__title">Автоэлектроника</h3>
                    <div class="catalog__content">
                        <p class="item">Видеорегистраторы</p>
                        <p class="item">Камеры,мониторы</p>
                        <p class="item">Карты памяти</p>
                        <p class="item">Магнитолы</p>
                        <p class="item">Акустика</p>
                        <p class="item">Комплектующие</p>
                        <p class="item">Парктроники</p>
                        <p class="item">Радар-детекторы</p>
                        <p class="item">Разное</p>
                    </div>
                </div>
            </div>
            <div class="catalog__item__wrap__third">
                <div class="catalog__item second">
                    <img class="catalog__img" src="<?=SITE_TEMPLATE_PATH?>/img/tools-2_03.png">
                    <h3 class="catalog__title">Инструмент</h3>
                    <div class="catalog__content">
                        <p class="item">Инструмент</p>
                        <p class="item">Наборы инструмента</p>
                        <p class="item">Отвертки</p>
                        <p class="item">Пассатижи</p>
                        <p class="item">Измерительный инструмент</p>
                        <p class="item">Пневмоинструмент</p>
                        <p class="item">Разное</p>
                        <p class="item">Спец. инструмент</p>
                    </div>
                </div>
                <div class="catalog__item second laset">
                    <img class="catalog__img" src="<?=SITE_TEMPLATE_PATH?>/img/caps-2_03.png">
                    <h3 class="catalog__title">Колпаки</h3>
                </div>
            </div>
        </div>
    </section>