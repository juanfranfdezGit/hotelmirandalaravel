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
        <h1 class="title__title">ultimate room</h1>
        <div class="title__route">
            <p class="title__route__text">Home | <span>Rooms</span></p>
        </div>
    </section>

    <section class="roomsGrid">
        <div class="roomsGrid__item">
            <img class="roomsGrid__item__image" src="/assets/images/room.webp" alt="room">
            <div class="rooms__icons roomsGrid__item">
                <img class="rooms__icons__item" src="/assets/icos/bed.svg" alt="bed">
                <img class="rooms__icons__item" src="/assets/icos/wifi.svg" alt="wifi">
                <img class="rooms__icons__item" src="/assets/icos/car.svg" alt="car">
                <img class="rooms__icons__item" src="/assets/icos/cold.svg" alt="cold">
                <img class="rooms__icons__item" src="/assets/icos/gym.svg" alt="gym">
                <img class="rooms__icons__item" src="/assets/icos/noSmoking.svg" alt="no smoking">
                <img class="rooms__icons__item" src="/assets/icos/cocktail.svg" alt="cocktail">
            </div>
            <h2 class="roomsGrid__item__title">minimal duplex room</h2>
            <p class="roomsGrid__item__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
            <div class="roomsGrid__item__actions">
                <h3 class="roomsGrid__item__actions__price">$345/Night<a href="/roomDetails.html">Book Now</a></h3>
            </div>
        </div>

        <div class="roomsGrid__item">
            <img class="roomsGrid__item__image" src="/assets/images/room04.jpg" alt="room">
            <div class="rooms__icons roomsGrid__item">
                <img class="rooms__icons__item" src="/assets/icos/bed.svg" alt="bed">
                <img class="rooms__icons__item" src="/assets/icos/wifi.svg" alt="wifi">
                <img class="rooms__icons__item" src="/assets/icos/car.svg" alt="car">
                <img class="rooms__icons__item" src="/assets/icos/cold.svg" alt="cold">
                <img class="rooms__icons__item" src="/assets/icos/gym.svg" alt="gym">
                <img class="rooms__icons__item" src="/assets/icos/noSmoking.svg" alt="no smoking">
                <img class="rooms__icons__item" src="/assets/icos/cocktail.svg" alt="cocktail">
            </div>
            <h2 class="roomsGrid__item__title">minimal duplex room</h2>
            <p class="roomsGrid__item__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
            <div class="roomsGrid__item__actions">
                <h3 class="roomsGrid__item__actions__price">$345/Night<a href="#">Book Now</a></h3>
            </div>
        </div>

        <div class="roomsGrid__item">
            <img class="roomsGrid__item__image" src="/assets/images/room04.jpg" alt="room">
            <div class="rooms__icons roomsGrid__item">
                <img class="rooms__icons__item" src="/assets/icos/bed.svg" alt="bed">
                <img class="rooms__icons__item" src="/assets/icos/wifi.svg" alt="wifi">
                <img class="rooms__icons__item" src="/assets/icos/car.svg" alt="car">
                <img class="rooms__icons__item" src="/assets/icos/cold.svg" alt="cold">
                <img class="rooms__icons__item" src="/assets/icos/gym.svg" alt="gym">
                <img class="rooms__icons__item" src="/assets/icos/noSmoking.svg" alt="no smoking">
                <img class="rooms__icons__item" src="/assets/icos/cocktail.svg" alt="cocktail">
            </div>
            <h2 class="roomsGrid__item__title">minimal duplex room</h2>
            <p class="roomsGrid__item__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
            <div class="roomsGrid__item__actions">
                <h3 class="roomsGrid__item__actions__price">$345/Night<a href="#">Book Now</a></h3>
            </div>
        </div>

        <div class="roomsGrid__item">
            <img class="roomsGrid__item__image" src="/assets/images/room05.webp" alt="room">
            <div class="rooms__icons roomsGrid__item">
                <img class="rooms__icons__item" src="/assets/icos/bed.svg" alt="bed">
                <img class="rooms__icons__item" src="/assets/icos/wifi.svg" alt="wifi">
                <img class="rooms__icons__item" src="/assets/icos/car.svg" alt="car">
                <img class="rooms__icons__item" src="/assets/icos/cold.svg" alt="cold">
                <img class="rooms__icons__item" src="/assets/icos/gym.svg" alt="gym">
                <img class="rooms__icons__item" src="/assets/icos/noSmoking.svg" alt="no smoking">
                <img class="rooms__icons__item" src="/assets/icos/cocktail.svg" alt="cocktail">
            </div>
            <h2 class="roomsGrid__item__title">minimal duplex room</h2>
            <p class="roomsGrid__item__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
            <div class="roomsGrid__item__actions">
                <h3 class="roomsGrid__item__actions__price">$345/Night<a href="#">Book Now</a></h3>
            </div>
        </div>

        <div class="roomsGrid__item">
            <img class="roomsGrid__item__image" src="/assets/images/room06.jpg" alt="room">
            <div class="rooms__icons roomsGrid__item">
                <img class="rooms__icons__item" src="/assets/icos/bed.svg" alt="bed">
                <img class="rooms__icons__item" src="/assets/icos/wifi.svg" alt="wifi">
                <img class="rooms__icons__item" src="/assets/icos/car.svg" alt="car">
                <img class="rooms__icons__item" src="/assets/icos/cold.svg" alt="cold">
                <img class="rooms__icons__item" src="/assets/icos/gym.svg" alt="gym">
                <img class="rooms__icons__item" src="/assets/icos/noSmoking.svg" alt="no smoking">
                <img class="rooms__icons__item" src="/assets/icos/cocktail.svg" alt="cocktail">
            </div>
            <h2 class="roomsGrid__item__title">minimal duplex room</h2>
            <p class="roomsGrid__item__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
            <div class="roomsGrid__item__actions">
                <h3 class="roomsGrid__item__actions__price">$345/Night<a href="#">Book Now</a></h3>
            </div>
        </div>

        <div class="pagination">
            <img src="/assets/icos/pagArrowLeft.svg" alt="left arrow">
            <p class="pagination__numb active">1</p>
            <p class="pagination__numb">2</p>
            <p class="pagination__numb">3</p>
            <p class="pagination__numb">...</p>
            <p class="pagination__numb">10</p>
            <img src="/assets/icos/pagArrowRight.svg" alt="right arrow">
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
<script type="module" src="{{ asset('js/rooms.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>