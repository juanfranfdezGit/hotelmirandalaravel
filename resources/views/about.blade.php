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

    <header class="header">
        <span class="header__span">We Make Your Feel Comfortable</span>
        <div class="header__nav">
            <div id="hamburguerMenu" class="header__nav__hamburguer">
                <span class="header__nav__hamburguer__bar"></span>
                <span class="header__nav__hamburguer__bar"></span>
                <span class="header__nav__hamburguer__bar"></span>
            </div>
            <a href="./index.html"><img class="header__nav__logo" src="/assets/logo.svg" alt="Hotel Miranda"></a>
            <nav class="header__nav__menu">
                <ul class="header__nav__menu__list">
                    <li class="header__nav__menu__list__item"><a href="about.html">About Us</a></li>
                    <li class="header__nav__menu__list__item"><a href="rooms.html">Rooms</a></li>
                    <li class="header__nav__menu__list__item"><a href="offers.html">Offers</a></li>
                    <li class="header__nav__menu__list__item"><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="header__actions">
            <img src="/assets/icos/user.svg" alt="User Ico">
            <img src="/assets/icos/search.svg" alt="Search Ico">
        </div>
    </header>

    <div id="overlay" class="overlay">
        <ul class="overlay__list">
            <li class="overlay__list__item"><a href="./about.html">About Us</a></li>
            <li class="overlay__list__item"><a href="./rooms.html">Rooms</a></li>
            <li class="overlay__list__item"><a href="./offers.html">Offers</a></li>
            <li class="overlay__list__item"><a href="./contact.html">Contact</a></li>
        </ul>
    </div>

    <section class="title">
        <span class="title__span">the ultimate luxury</span>
        <h1 class="title__title">about us</h1>
        <div class="title__route">
            <p class="title__route__text">Home | <span>About</span></p>
        </div>
    </section>

    <section class="aboutVideo"> 
        <video class="aboutVideo__video" src="/assets/video/video01.mp4" autoplay loop muted></video>
        <h2 class="aboutVideo__title">Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</h2>
        <div class="aboutVideo__cards">
            <div class="aboutVideo__cards__item">
                <img class="aboutVideo__cards__item__image" src="/assets/icos/breakfast.svg" alt="breakfast">
                <h3 class="aboutVideo__cards__item__title">breakfast</h3>
            </div>
            <div class="aboutVideo__cards__item aboutVideo__cards__item-solid">
                <img class="aboutVideo__cards__item__image" src="/assets/icos/airplane.svg" alt="airplane">
                <h3 class="aboutVideo__cards__item__title aboutVideo__cards__item__title-solid">airport pickup</h3>
            </div>
            <div class="aboutVideo__cards__item">
                <img class="aboutVideo__cards__item__image" src="/assets/icos/map02.svg" alt="map02">
                <h3 class="aboutVideo__cards__item__title">city guide</h3>
            </div>
            <div class="aboutVideo__cards__item aboutVideo__cards__item-hide">
                <img class="aboutVideo__cards__item__image" src="/assets/icos/bbq.svg" alt="map02">
                <h3 class="aboutVideo__cards__item__title">bbq party</h3>
            </div>
            <div class="aboutVideo__cards__item">
                <img class="aboutVideo__cards__item__image" src="/assets/icos/luxury.svg" alt="luxury">
                <h3 class="aboutVideo__cards__item__title">luxury room</h3>
            </div>
        </div>
    </section>

    <section class="restaurant">
        <img class="restaurant__image" src="/assets/images/food.jpg" alt="restaurant">
        <div class="restaurant__info">
            <span class="restaurant__info__span">restaurant</span>
            <h2 class="restaurant__info__title">get restaurant facilities & many other more</h2>
            <p class="restaurant__info__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
            <button class="button button-solid">take a tour</button>
        </div>
    </section>

    <section class="features features-dark">
        <span class="features__span features__span-dark">facilities</span>
        <h2 class="features__title features__title-dark">core features</h2>

        <div class="features__items features__items-dark">
            <div class="features__items__item features__items__item-dark">
                <img class="features__items__item__img" src="/assets/icos/rating.svg" alt="rating">
                <h3 class="features__items__item__title features__items__item__title-dark">have high rating</h3>
                <p class="features__items__item__description features__items__item__description-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>

            <div class="features__items__item features__items__item-dark">
                <img class="features__items__item__img" src="/assets/icos/time.svg" alt="time">
                <h3 class="features__items__item__title features__items__item__title-dark">quiet hours</h3>
                <p class="features__items__item__description features__items__item__description-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>

            <div class="features__items__item features__items__item-dark">
                <img class="features__items__item__img" src="/assets/icos/location.svg" alt="location">
                <h3 class="features__items__item__title features__items__item__title-dark">best locations</h3>
                <p class="features__items__item__description features__items__item__description-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>

            <div class="features__items__item features__items__item-dark">
                <img class="features__items__item__img" src="/assets/icos/cancellation.svg" alt="cancellation">
                <h3 class="features__items__item__title features__items__item__title-dark">free cancellation</h3>
                <p class="features__items__item__description features__items__item__description-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>

            <div class="features__items__item features__items__item-dark">
                <img class="features__items__item__img" src="/assets/icos/payment.svg" alt="payment">
                <h3 class="features__items__item__title features__items__item__title-dark">payment options</h3>
                <p class="features__items__item__description features__items__item__description-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>

            <div class="features__items__item features__items__item-dark">
                <img class="features__items__item__img" src="/assets/icos/offers.svg" alt="offers">
                <h3 class="features__items__item__title features__items__item__title-dark">special offers</h3>
                <p class="features__items__item__description features__items__item__description-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>

        <div class="features__indicators features__indicators-dark">
            <span class="features__indicators__item features__indicators__item-dark active"></span>
            <span class="features__indicators__item features__indicators__item-dark"></span>
            <span class="features__indicators__item features__indicators__item-dark"></span>
            <span class="features__indicators__item features__indicators__item-dark"></span>
            <span class="features__indicators__item features__indicators__item-dark"></span>
            <span class="features__indicators__item features__indicators__item-dark"></span>
        </div>
    </section>

    <section class="facts">
        <span class="facts__span">counter</span>
        <h2 class="facts__title">some fun facts</h2>

        <div class="facts__items">
            <div class="facts__items__item">
                <img class="facts__items__item__icon" src="/assets/icos/happy.svg" alt="happy user">
                <div class="facts__items__item__info">
                    <h3 class="facts__items__item__info__title">8000</h3>
                    <p class="facts__items__item__info__description">happy users</p>
                </div>
                <img class="facts__items__item__arrow" src="/assets/icos/rightArrow.svg" alt="arrow">
            </div>
            <div class="facts__items__item">
                <img class="facts__items__item__icon" src="/assets/icos/reviews.svg" alt="reviews">
                <div class="facts__items__item__info">
                    <h3 class="facts__items__item__info__title">10M</h3>
                    <p class="facts__items__item__info__description">reviews & appriciate</p>
                </div>
                <img class="facts__items__item__arrow" src="/assets/icos/rightArrow.svg" alt="arrow">
            </div>
            <div class="facts__items__item">
                <img class="facts__items__item__icon" src="/assets/icos/world.svg" alt="world">
                <div class="facts__items__item__info">
                    <h3 class="facts__items__item__info__title">8000</h3>
                    <p class="facts__items__item__info__description">happy users</p>
                </div>
                <img class="facts__items__item__arrow" src="/assets/icos/rightArrow.svg" alt="arrow">
            </div>
        </div>

        <div class="swiper facts">
            <div class="swiper-wrapper">
                <div class="swiper-slide facts-slide">
                    <img src="/assets/images/facts.webp" alt="fact Image">
                </div>
                <div class="swiper-slide facts-slide">
                    <img src="/assets/images/facts02.webp" alt="fact Image 02">
                </div>
            </div>
        
            <div class="swiper-pagination facts"></div>
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
<script type="module" src="/js/about.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>