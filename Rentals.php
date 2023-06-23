<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--== FAVICON ==-->
        <link rel="shortcut icon" href="" type="">

        <!--== BOXICONS ==-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


        <!--== SWIPER CSS ==-->
        <link rel="stylesheet" href="Assect/CSS/swiper-bundle.min.css">
        
        <!--== CSS ==-->
        <link rel="stylesheet" href="Assect/CSS/rentals.css">

        
        <title>Rentals - Housell</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="Index.php" class="nav__logo">
                    Housell <i class='bx bxs-home-alt-2'></i>
                </a>
                
                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="Index.php" class="nav__link active-link">
                                <i class='bx bx-home-alt-2' ></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="Buy.php" class="nav__link">
                                <i class='bx bx-building-house'></i>
                                <span>Buy</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="Sell.php" class="nav__link">
                                <i class='bx bx-award'></i>
                                <span>Sell</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="Contact.php" class="nav__link">
                                <i class='bx bx-phone'></i>
                                <span>Contact</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="Rentals.php" class="nav__link">
                                <i class='bx bxs-help-circle'></i>
                                <span>Manager Rentals</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Theme change button -->
                <i class='bx bx-moon change-theme' id="theme-button" ></i>

                <a href="signinup.php" class="button nav__button">
                    Sign In
                </a>
            </nav>
        </header>


        <!--============ MAIN ===========-->
        <main class="main">
            <!--=========== IMAGE ==========-->
            <section class="image__contact">
                <img src="Assect/Image/contact.jpg" alt="" class="image__size">
            </section>

            <!--=========== LOGO TITLE DESC ============-->
            <section class="logos section">
                <div class="logos__container container grid">
                    <div class="logos__img">
                        <img src="Assect/Image/logohouse.png" alt="" class="logo">
                        <h2 class="logo__title">One click listings</h2>
                        <p class="logo__description">
                            Landlording made simple, <br>
                            whether you have one rental <br>
                            or an entire portfolio.
                        </p>
                    </div>
                    <div class="logos__img">
                        <img src="Assect/Image/logohouse.png" alt="" class="logo">
                        <h2 class="logo__title">Screen Tenants</h2>
                        <p class="logo__description">
                            List your property for free on <br>
                            Housell, Trulia and HotPads to help <br>
                            you find your perfect renter.
                        </p>
                    </div>
                    <div class="logos__img">
                        <img src="Assect/Image/logohouse.png" alt="" class="logo">
                        <h2 class="logo__title">Online leases</h2>
                        <p class="logo__description">
                            Landlord tools built by industry <br>
                            experts and the brand that <br>
                            knows real estate.
                        </p>
                    </div>
                </div>
            </section>

            <!--==================== VALUE1 ====================-->
            <section class="value section" id="">
                <div class="value__container container grid">
                    <div class="value__images">
                        <div class="value__orbe"></div>

                        <div class="value__img">
                            <img src="Assect/Image/taneli-lahtinen-FzthdgL6vBI-unsplash.jpg" alt="">
                        </div>
                    </div>

                    <div class="value__content">
                        <div class="value__data">
                            <span class="section__subtitle">Housell</span>
                            <h2 class="section__title">
                                One click listings<span>.</span>
                            </h2>
                            <p class="value__description">
                                You can easily upload your property
                                listings to various popular platforms width
                                one click, saving you time and effort.
                            </p>
                    </div>

                    <a href="#" class="manager__button">
                        Learn more
                    </a>
                </div>
            </section>

            <!--==================== CONTACT ====================-->
            <section class="contact section" id="">
                <div class="contact__container container grid">
                    <div class="contact__images">
                        <div class="contact__orbe"></div>

                        <div class="contact__img">
                            <img src="Assect/Image/josh-duke-KWuHXxOY_QA-unsplash.jpg" alt="">
                        </div>
                    </div>

                    <div class="contact__content">
                        <div class="contact__data">
                            <span class="section__subtitle">Housell</span>
                            <h2 class="section__title">
                                Screen Tenants<span>.</span>
                            </h2>
                            <p class="contact__description">
                                Our advanced features enable you to assess 
                                potential tenants' online history, including background,
                                references, and payment records.
                            </p>
                    </div>

                    <a href="#" class="manager__button">
                        Learn more
                    </a>
                </div>

            </section>

            <!--==================== VALUE2 ====================-->
            <section class="value section" id="">
                <div class="value__container container grid">
                    <div class="value__images">
                        <div class="value__orbe"></div>

                        <div class="value__img">
                            <img src="Assect/Image/meritt-thomas-u-Hb93V6IWI-unsplash.jpg" alt="">
                        </div>
                    </div>

                    <div class="value__content">
                        <div class="value__data">
                            <span class="section__subtitle">Housell</span>
                            <h2 class="section__title">
                                Online leases<span>.</span>
                            </h2>
                            <p class="value__description">
                                You can create and sign lease agreements 
                                electronically, eliminating the need for 
                                physical meetings.
                            </p>
                        </div>

                        <a href="#" class="manager__button">
                            Learn more
                        </a>
                    </div>
                </div>
            </section>


        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div>
                    <a href="#" class="footer__logo">
                        Housell <i class='bx bxs-home-alt-2'></i>
                    </a>
                    <p class="footer__description">
                        Our vision is to make all people <br>
                        the best place to live for them.
                    </p>
                </div>

                <div class="footer__content">
                    <div>
                        <h3 class="footer__title">
                            About
                        </h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">About Us</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Features</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">News & Blog</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="footer__title">
                            Company
                        </h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">How We Work?</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Capital</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Security</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="footer__title">
                            Support
                        </h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">FAQ</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Support Center</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Contact Us</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="footer__title">
                            Follow Us
                        </h3>

                        <ul class="footer__social">
                            <a href="https://www.facebook.com/asis.wisesa/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-facebook-circle' ></i>
                            </a>
                            <a href="https://www.instagram.com/winaskye__/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-instagram-alt' ></i>
                            </a>
                            <a href="#" target="_blank" class="footer__social-link">
                                <i class='bx bxl-pinterest' ></i>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer__info container">
                <span class="footer__copy">
                    &#169; Housell. All rights reserved
                </span>

                <div class="footer__privacy">
                    <a href="#">Terms & Agreements</a>
                    <a href="#">Privacy Policy</a>
                </div>
            </div>
        </footer>


        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class='bx bx-chevrons-up' ></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="Assect/JS/scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="Assect/JS/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="Assect/JS/main.js"></script>

        <!--===== GOOGLE MAPS API=====-->
    </body>
</html>