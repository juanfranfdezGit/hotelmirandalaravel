@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Miranda</title>
    <link rel="icon" type="image/svg+xml" href="/assets/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
     />
</head>
<body>

    <section class="title">
        <span class="title__span">the ultimate luxury</span>
        <h1 class="title__title">our offers</h1>
        <div class="title__route">
            <p class="title__route__text">Home | <span>offers</span></p>
        </div>
    </section>

    <section class="offersGrid">
        <div class="offersGrid__item">
            <div class="offersGrid__item__image">
                <img class="offersGrid__item__image__img" src="/assets/images/room05.webp" alt="room">
                <h3 class="offersGrid__item__image__price offersGrid__item__image__price-old">$500<span class="old">/night</span></h3>
                <h3 class="offersGrid__item__image__price">$345<span>/night</span></h3>
            </div>
            <div class="offersGrid__item__info">
                <span class="offersGrid__item__info__span">double bed</span>
                <h2 class="offersGrid__item__info__title">luxury double bed</h2>
                <p class="offersGrid__item__info__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in 
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="ameneties__grid offersGrid">
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/airConditioner.svg" alt="Air Conditioner">
                    <p class="ameneties__grid__item__description">air conditioner</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/breakfast02.svg" alt="breakfast">
                    <p class="ameneties__grid__item__description">breakfast</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/cleaning.svg" alt="cleaning">
                    <p class="ameneties__grid__item__description">cleaning</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/grocery.svg" alt="grocery">
                    <p class="ameneties__grid__item__description">grocery</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/shop.svg" alt="shop near">
                    <p class="ameneties__grid__item__description">shop near</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/wifi02.svg" alt="high speed wifi">
                    <p class="ameneties__grid__item__description">high speed wifi</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/kitchen.svg" alt="kitchen">
                    <p class="ameneties__grid__item__description">kitchen</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/shower.svg" alt="shower">
                    <p class="ameneties__grid__item__description">shower</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/singlebed.svg" alt="single bed">
                    <p class="ameneties__grid__item__description">single bed</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/towels.svg" alt="towels">
                    <p class="ameneties__grid__item__description">towels</p>
                </div>
            </div>
            <button class="button button-solid offersGrid">book now</button>
        </div>

        <div class="offersGrid__item">
            <div class="offersGrid__item__image">
                <img class="offersGrid__item__image__img" src="/assets/images/room06.jpg" alt="room">
                <h3 class="offersGrid__item__image__price offersGrid__item__image__price-old">$500<span class="old">/night</span></h3>
                <h3 class="offersGrid__item__image__price">$345<span>/night</span></h3>
            </div>
            <div class="offersGrid__item__info">
                <span class="offersGrid__item__info__span">double bed</span>
                <h2 class="offersGrid__item__info__title">luxury double bed</h2>
                <p class="offersGrid__item__info__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in 
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="ameneties__grid offersGrid">
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/airConditioner.svg" alt="Air Conditioner">
                    <p class="ameneties__grid__item__description">air conditioner</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/breakfast02.svg" alt="breakfast">
                    <p class="ameneties__grid__item__description">breakfast</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/cleaning.svg" alt="cleaning">
                    <p class="ameneties__grid__item__description">cleaning</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/grocery.svg" alt="grocery">
                    <p class="ameneties__grid__item__description">grocery</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/shop.svg" alt="shop near">
                    <p class="ameneties__grid__item__description">shop near</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/wifi02.svg" alt="high speed wifi">
                    <p class="ameneties__grid__item__description">high speed wifi</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/kitchen.svg" alt="kitchen">
                    <p class="ameneties__grid__item__description">kitchen</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/shower.svg" alt="shower">
                    <p class="ameneties__grid__item__description">shower</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/singlebed.svg" alt="single bed">
                    <p class="ameneties__grid__item__description">single bed</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/towels.svg" alt="towels">
                    <p class="ameneties__grid__item__description">towels</p>
                </div>
            </div>
            <button class="button button-solid offersGrid">book now</button>
        </div>

        <div class="offersGrid__item">
            <div class="offersGrid__item__image">
                <img class="offersGrid__item__image__img" src="/assets/images/room04.jpg" alt="room">
                <h3 class="offersGrid__item__image__price offersGrid__item__image__price-old">$500<span class="old">/night</span></h3>
                <h3 class="offersGrid__item__image__price">$345<span>/night</span></h3>
            </div>
            <div class="offersGrid__item__info">
                <span class="offersGrid__item__info__span">double bed</span>
                <h2 class="offersGrid__item__info__title">luxury double bed</h2>
                <p class="offersGrid__item__info__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehend erit in 
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="ameneties__grid offersGrid">
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/airConditioner.svg" alt="Air Conditioner">
                    <p class="ameneties__grid__item__description">air conditioner</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/breakfast02.svg" alt="breakfast">
                    <p class="ameneties__grid__item__description">breakfast</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/cleaning.svg" alt="cleaning">
                    <p class="ameneties__grid__item__description">cleaning</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/grocery.svg" alt="grocery">
                    <p class="ameneties__grid__item__description">grocery</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/shop.svg" alt="shop near">
                    <p class="ameneties__grid__item__description">shop near</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/wifi02.svg" alt="high speed wifi">
                    <p class="ameneties__grid__item__description">high speed wifi</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/kitchen.svg" alt="kitchen">
                    <p class="ameneties__grid__item__description">kitchen</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/shower.svg" alt="shower">
                    <p class="ameneties__grid__item__description">shower</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/singlebed.svg" alt="single bed">
                    <p class="ameneties__grid__item__description">single bed</p>
                </div>
                <div class="ameneties__grid__item">
                    <img class="ameneties__grid__item__image" src="/assets/icos/towels.svg" alt="towels">
                    <p class="ameneties__grid__item__description">towels</p>
                </div>
            </div>
            <button class="button button-solid offersGrid">book now</button>
        </div>
    </section>

    <section class="popularRooms">
        <span class="popularRooms__span">popular list</span>
        <h2 class="popularRooms__title">popular rooms</h2>

        <div class="swiper popular">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/assets/images/room.webp" alt="Room Image">
                    <div class="popularRooms__info">
                        <h2 class="popularRooms__info__title">minimal duplex room</h2>
                        <p class="popularRooms__info__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="popularRooms__info__actions">
                            <h3 class="popularRooms__info__actions__price">$345/Night<a href="#">Booking Now</a></h3>
                        </div>
                    </div>
                    <div class="popularRooms__icons">
                        <img class="popularRooms__icons__item" src="/assets/icos/bed.svg" alt="bed">
                        <img class="popularRooms__icons__item" src="/assets/icos/wifi.svg" alt="wifi">
                        <img class="popularRooms__icons__item" src="/assets/icos/car.svg" alt="car">
                        <img class="popularRooms__icons__item" src="/assets/icos/cold.svg" alt="cold">
                        <img class="popularRooms__icons__item" src="/assets/icos/gym.svg" alt="gym">
                        <img class="popularRooms__icons__item" src="/assets/icos/noSmoking.svg" alt="no smoking">
                        <img class="popularRooms__icons__item" src="/assets/icos/cocktail.svg" alt="cocktail">
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/assets/images/room02.jpg" alt="Room Image 02">
                    <div class="popularRooms__info">
                        <h2 class="popularRooms__info__title">minimal duplex room</h2>
                        <p class="popularRooms__info__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="popularRooms__info__actions">
                            <h3 class="popularRooms__info__actions__price">$345/Night<a href="#">Booking Now</a></h3>
                        </div>
                    </div>
                    <div class="popularRooms__icons">
                        <img class="popularRooms__icons__item" src="/assets/icos/bed.svg" alt="bed">
                        <img class="popularRooms__icons__item" src="/assets/icos/wifi.svg" alt="wifi">
                        <img class="popularRooms__icons__item" src="/assets/icos/car.svg" alt="car">
                        <img class="popularRooms__icons__item" src="/assets/icos/cold.svg" alt="cold">
                        <img class="popularRooms__icons__item" src="/assets/icos/gym.svg" alt="gym">
                        <img class="popularRooms__icons__item" src="/assets/icos/noSmoking.svg" alt="no smoking">
                        <img class="popularRooms__icons__item" src="/assets/icos/cocktail.svg" alt="cocktail">
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/assets/images/room03.jpg" alt="Room Image 03">
                    <div class="popularRooms__info">
                        <h2 class="popularRooms__info__title">minimal duplex room</h2>
                        <p class="popularRooms__info__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="popularRooms__info__actions">
                            <h3 class="popularRooms__info__actions__price">$345/Night<a href="#">Booking Now</a></h3>
                        </div>
                    </div>
                    <div class="popularRooms__icons">
                        <img class="popularRooms__icons__item" src="/assets/icos/bed.svg" alt="bed">
                        <img class="popularRooms__icons__item" src="/assets/icos/wifi.svg" alt="wifi">
                        <img class="popularRooms__icons__item" src="/assets/icos/car.svg" alt="car">
                        <img class="popularRooms__icons__item" src="/assets/icos/cold.svg" alt="cold">
                        <img class="popularRooms__icons__item" src="/assets/icos/gym.svg" alt="gym">
                        <img class="popularRooms__icons__item" src="/assets/icos/noSmoking.svg" alt="no smoking">
                        <img class="popularRooms__icons__item" src="/assets/icos/cocktail.svg" alt="cocktail">
                    </div>
                </div>
            </div>
        
            <div class="swiper-button-prev main"></div>
            <div class="swiper-button-next main"></div>
        </div>
    </section>

    <footer>
        <div class="socials">
            <img class="socials__logo" src="/assets/logoSolid.png" alt="Hotel Miranda">
            <p class="socials__description">
                Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore 
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
            </p>
            <ul class="socials__list">
                <li class="socials__list__item"><img src="/assets/icos/facebook.svg" alt="facebook"></li>
                <li class="socials__list__item socials__list__item-solid"><img src="/assets/icos/twitter.svg" alt="twitter"></li>
                <li class="socials__list__item"><img src="/assets/icos/behance.svg" alt="behance"></li>
                <li class="socials__list__item"><img src="/assets/icos/linkedin.svg" alt="linkedin"></li>
                <li class="socials__list__item"><img src="/assets/icos/youtube.svg" alt="youtube"></li>
            </ul>
        </div>

        <div class="services">
            <h3 class="services__title">Services.</h3>
            <ul class="services__list">
                <div class="services__list__column">
                    <li class="services__list__column__item">resturent & bar</li>
                    <li class="services__list__column__item">swimming pool</li>
                    <li class="services__list__column__item">wellness & pa</li>
                    <li class="services__list__column__item">restaurant</li>
                    <li class="services__list__column__item">conference room</li>
                    <li class="services__list__column__item">coctail party house</li>
                </div>
                <div class="services__list__column">
                    <li class="services__list__column__item">gaming zone</li>
                    <li class="services__list__column__item">marrige party</li>
                    <li class="services__list__column__item">party planning</li>
                    <li class="services__list__column__item">tour consultancy</li>
                </div>
            </ul>
        </div>

        <div class="contact">
            <h3 class="contact__title">Contact us</h3>

            <div class="contact__section">
                <img class="contact__section__ico" src="/assets/icos/phone.svg" alt="phone">
                <div class="contact__section__info">
                    <p class="contact__section__info__title">phone number</p>
                    <p class="contact__section__info__description">+987 876 765 76 577</p>
                </div>
            </div>

            <div class="contact__section">
                <img class="contact__section__ico" src="/assets/icos/mail.svg" alt="mail">
                <div class="contact__section__info">
                    <p class="contact__section__info__title">Email</p>
                    <p class="contact__section__info__description">miranda-hotel@gmail.com</p>
                </div>
            </div>

            <div class="contact__section">
                <img class="contact__section__ico" src="/assets/icos/map.svg" alt="map">
                <div class="contact__section__info">
                    <p class="contact__section__info__title">location</p>
                    <p class="contact__section__info__description">calle san francisco 245, sevilla, españa</p>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>copyright Juan Francisco Romero Fdez - 2025</p>
            <p>Terms of Use | Privacy Environmental Policy</p>
        </div>
    </footer>
    
</body>
</html>
<script type="module" src="/js/offers.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>