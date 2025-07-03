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

    <main>
        <section class="banner">
            <div class="banner__info">
                <span class="banner__info__span">The ultimate luxury experience</span>
                <h1 class="banner__info__title">the perfect base for you</h1>
                <div class="banner__info__actions">
                    <button class="button button-solid">take a tour</button>
                    <button class="button">learn more</button>
                </div>
            </div>

            <div class="availability">
                <form class="availability__form">
                    <div class="availability__form__item">
                        <label class="availability__form__item__label" for="arrival">Arrival Date</label>
                        <input class="availability__form__item__input" id="arrival" type="date">
                    </div>
                    <div class="availability__form__item">
                        <label class="availability__form__item__label" for="departure">Departure Date</label>
                        <input class="availability__form__item__input" id="departure" type="date">
                    </div>
                    <div class="availability__form__item">
                        <input class="button button-solid" type="submit" value="Check availability">
                    </div>
                </form>
            </div>
        </section>

        <section class="aboutus">

            <div class="aboutus__info">
                <span class="aboutus__info__span">about us</span>
                <h2 class="aboutus__info__title">Discover our underground.</h2>
                <p class="aboutus__info__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button class="button button-solid">book now</button>
            </div>

            <div class="aboutus__card">
                <div class="aboutus__card__image">
                    <img src="/assets/images/img01.jpg" alt="Our Team">
                </div>
                <div class="aboutus__card__info">
                    <img class="aboutus__card__info__ico" src="/assets/icos/team.svg" alt="Team Ico">
                    <img class="aboutus__card__info__icoBack" src="/assets/icos/team.svg" alt="Team Ico Back">
                    <h3 class="aboutus__card__info__title">strong team</h3>
                    <p class="aboutus__card__info__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>

            <div class="aboutus__card aboutus__card-dark">
                <div class="aboutus__card__image">
                    <img src="/assets/images/img02.jpg" alt="Our Team">
                </div>
                <div class="aboutus__card__info">
                    <img class="aboutus__card__info__ico" src="/assets/icos/calendar02.svg" alt="Calendar Ico">
                    <h3 class="aboutus__card__info__title">Luxury Room</h3>
                    <p class="aboutus__card__info__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
        </section>

        <section class="rooms">
            <span class="rooms__span">rooms</span>
            <h2 class="rooms__title">hand picked rooms</h2>

            <div class="rooms__icons">
                <img class="rooms__icons__item" src="/assets/icos/bed.svg" alt="bed">
                <img class="rooms__icons__item" src="/assets/icos/wifi.svg" alt="wifi">
                <img class="rooms__icons__item" src="/assets/icos/car.svg" alt="car">
                <img class="rooms__icons__item" src="/assets/icos/cold.svg" alt="cold">
                <img class="rooms__icons__item" src="/assets/icos/gym.svg" alt="gym">
                <img class="rooms__icons__item" src="/assets/icos/noSmoking.svg" alt="no smoking">
                <img class="rooms__icons__item" src="/assets/icos/cocktail.svg" alt="cocktail">
            </div>

            <div class="swiper main">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/assets/images/room.webp" alt="Room Image">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/images/room02.jpg" alt="Room Image 02">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/images/room03.jpg" alt="Room Image 03">
                    </div>
                </div>
            
                <div class="swiper-button-prev main"></div>
                <div class="swiper-button-next main"></div>
            </div>

            <div class="rooms__info">
                <h3 class="rooms__info__title">Minimal duplex room</h3>
                <p class="rooms__info__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                <p class="rooms__info__price"><span>$345</span>/Night</p>
            </div>

        </section>

        <section class="video">
            <span class="video__span">intro video</span>
            <h2 class="video__title">meet with our luxury place.</h2>
            <p class="video__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                 nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
            <video class="video__video" src="/assets/video/video01.mp4" autoplay loop muted></video>
            <button class="button button-solid">book now</button>
        </section>

        <section class="features">
            <span class="features__span">facilities</span>
            <h2 class="features__title">core features</h2>

            <div class="features__items">
                <div class="features__items__item">
                    <img class="features__items__item__img" src="/assets/icos/rating.svg" alt="rating">
                    <h3 class="features__items__item__title">have high rating</h3>
                    <p class="features__items__item__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
    
                <div class="features__items__item">
                    <img class="features__items__item__img" src="/assets/icos/time.svg" alt="time">
                    <h3 class="features__items__item__title">quiet hours</h3>
                    <p class="features__items__item__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
    
                <div class="features__items__item">
                    <img class="features__items__item__img" src="/assets/icos/location.svg" alt="location">
                    <h3 class="features__items__item__title">best locations</h3>
                    <p class="features__items__item__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
    
                <div class="features__items__item">
                    <img class="features__items__item__img" src="/assets/icos/cancellation.svg" alt="cancellation">
                    <h3 class="features__items__item__title">free cancellation</h3>
                    <p class="features__items__item__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
    
                <div class="features__items__item">
                    <img class="features__items__item__img" src="/assets/icos/payment.svg" alt="payment">
                    <h3 class="features__items__item__title">payment options</h3>
                    <p class="features__items__item__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
    
                <div class="features__items__item">
                    <img class="features__items__item__img" src="/assets/icos/offers.svg" alt="offers">
                    <h3 class="features__items__item__title">special offers</h3>
                    <p class="features__items__item__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
            </div>

            <div class="features__indicators">
                <span class="features__indicators__item active"></span>
                <span class="features__indicators__item"></span>
                <span class="features__indicators__item"></span>
                <span class="features__indicators__item"></span>
                <span class="features__indicators__item"></span>
                <span class="features__indicators__item"></span>
            </div>
        </section>

        <section class="food">
            <span class="food__span">menu</span>
            <h2 class="food__title">our foods menu</h2>
            <img class="food__image" src="/assets/icos/donut.svg" alt="donut">

            <div class="swiper menu">
                <div class="swiper-wrapper">
                    <div class="swiper-slide menu">
                        <ul class="swiper-slide__list">
                            <li class="swiper-slide__list__item">
                                <img class="swiper-slide__list__item__image" src="/assets/images/foodlist.jpg" alt="egg & bacon">
                                <div class="swiper-slide__list__item__info">
                                    <h3 class="swiper-slide__list__item__info__title">Eggs & bacon</h3>
                                    <p class="swiper-slide__list__item__info__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </li>
                            <li class="swiper-slide__list__item">
                                <img class="swiper-slide__list__item__image" src="/assets/images/foodlist02.webp" alt="tea or coffe">
                                <div class="swiper-slide__list__item__info">
                                    <h3 class="swiper-slide__list__item__info__title">tea or coffe</h3>
                                    <p class="swiper-slide__list__item__info__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </li>
                            <li class="swiper-slide__list__item">
                                <img class="swiper-slide__list__item__image" src="/assets/images/foodlist03.png" alt="chia oatmeal">
                                <div class="swiper-slide__list__item__info">
                                    <h3 class="swiper-slide__list__item__info__title">chia oatmeal</h3>
                                    <p class="swiper-slide__list__item__info__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-slide menu">
                        <ul>
                            <li class="swiper-slide__list__item">
                                <img class="swiper-slide__list__item__image" src="/assets/images/foodlist04.jpg" alt="fruit parfait">
                                <div class="swiper-slide__list__item__info">
                                    <h3 class="swiper-slide__list__item__info__title">fruit parfait</h3>
                                    <p class="swiper-slide__list__item__info__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </li>
                            <li class="swiper-slide__list__item">
                                <img class="swiper-slide__list__item__image" src="/assets/images/foodlist05.jpg" alt="marmalades">
                                <div class="swiper-slide__list__item__info">
                                    <h3 class="swiper-slide__list__item__info__title">marmalade selection</h3>
                                    <p class="swiper-slide__list__item__info__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </li>
                            <li class="swiper-slide__list__item">
                                <img class="swiper-slide__list__item__image" src="/assets/images/foodlist06.jpg" alt="cheese">
                                <div class="swiper-slide__list__item__info">
                                    <h3 class="swiper-slide__list__item__info__title">cheese plate</h3>
                                    <p class="swiper-slide__list__item__info__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            
                <div class="swiper-menu-nav">
                    <div class="swiper-button-prev menu"></div>
                    <div class="swiper-button-next menu"></div>
                </div>
            </div>

            <div class="swiper food">
                <div class="swiper-wrapper">
                    <div class="swiper-slide food-slide">
                        <img src="/assets/images/food.jpg" alt="food Image">
                    </div>
                    <div class="swiper-slide food-slide">
                        <img src="/assets/images/food02.jpg" alt="food Image 02">
                    </div>
                    <div class="swiper-slide food-slide">
                        <img src="/assets/images/food03.jpg" alt="food Image 03">
                    </div>
                </div>
            
                <div class="swiper-pagination food"></div>
            </div>

        </section>

        <section class="datas">
            <div class="datas__item">
                <img class="datas__item__image" src="/assets/icos/roket.svg" alt="rocket">
                <h2 class="datas__item__title">84k<span>+</span></h2>
                <p class="datas__item__description">projects are completed</p>
            </div>
            <div class="datas__item">
                <img class="datas__item__image" src="/assets/icos/team02.svg" alt="team">
                <h2 class="datas__item__title">10M<span>+</span></h2>
                <p class="datas__item__description">active backers around world</p>
            </div>
            <div class="datas__item">
                <img class="datas__item__image" src="/assets/icos/served.svg" alt="served">
                <h2 class="datas__item__title">02K<span>+</span></h2>
                <p class="datas__item__description">categories served</p>
            </div>
            <div class="datas__item">
                <img class="datas__item__image" src="/assets/icos/book.svg" alt="book">
                <h2 class="datas__item__title">100M<span>+</span></h2>
                <p class="datas__item__description">idea raised funds</p>
            </div>
        </section>

    </main>

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
<script type="module" src="/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>