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
        <h1 class="title__title">new details</h1>
        <div class="title__route">
            <p class="title__route__text">Home | <span>blog</span></p>
        </div>
    </section>

    <section class="contactList">
        <div class="contactList__section">
            <img class="contactList__section__ico" src="/assets/icos/map.svg" alt="map">
            <div class="contactList__section__info">
                <p class="contactList__section__info__title">Hotel Address</p>
                <p class="contactList__section__info__description">calle san francisco 245, sevilla, españa</p>
            </div>
        </div>

        <div class="contactList__section">
            <img class="contactList__section__ico" src="/assets/icos/phone.svg" alt="phone">
            <div class="contactList__section__info">
                <p class="contactList__section__info__title">phone number</p>
                <p class="contactList__section__info__description">+987 876 765 76 577</p>
            </div>
        </div>

        <div class="contactList__section">
            <img class="contactList__section__ico" src="/assets/icos/mail.svg" alt="mail">
            <div class="contactList__section__info">
                <p class="contactList__section__info__title">Email</p>
                <p class="contactList__section__info__description">miranda-hotel@gmail.com</p>
            </div>
        </div>
    </section>

    <section class="map">
        <img class="map__image" src="/assets/images/map.png" alt="map">
    </section>

    <section class="formSection">
        <form class="formSection__form" action="">
            <div class="formSection__form__item">
                <img class="formSection__form__item__ico" src="/assets/icos/user02.svg" alt="ico">
                <input class="formSection__form__item__input" type="text" name="name" id="name" placeholder=" ">
                <label class="formSection__form__item__label" for="name">Your full name</label>
            </div>
            <div class="formSection__form__item">
                <img class="formSection__form__item__ico" src="/assets/icos/phone02.svg" alt="ico">
                <input class="formSection__form__item__input" type="text" name="number" id="number" placeholder=" ">
                <label class="formSection__form__item__label" for="number">Add your phone number</label>
            </div>
            <div class="formSection__form__item">
                <img class="formSection__form__item__ico" src="/assets/icos/mail02.svg" alt="ico">
                <input class="formSection__form__item__input" type="text" name="email" id="email" placeholder=" ">
                <label class="formSection__form__item__label" for="email">Enter email address</label>
            </div>
            <div class="formSection__form__item">
                <img class="formSection__form__item__ico" src="/assets/icos/subject.svg" alt="ico">
                <input class="formSection__form__item__input" type="text" name="subject" id="subject" placeholder=" ">
                <label class="formSection__form__item__label" for="subject">Enter subject</label>
            </div>
            <div class="formSection__form__item area">
                <img class="formSection__form__item__ico" src="/assets/icos/pencil.svg" alt="ico">
                <textarea class="formSection__form__item__textarea" type="text" name="message" id="message" placeholder=" "></textarea>
                <label class="formSection__form__item__label" for="message">Tell us what you need</label>
            </div>
            <input type="submit" value="send" class="button button-solid formSection__form__item__submit">
        </form>
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
<script type="module" src="/js/contact.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>