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
        <link rel="stylesheet" href="Assect/CSS/sellhome.css">

        
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

        <!--==================== HOME ====================-->
            <main class="main">
        <!--=========== IMAGE ==========-->
                <section class="image__contact">
                    <img src="Assect/Image/anjy.jpg" alt="" class="image__size">
                </section>
        <!--==================== SALE ====================-->
        <section class="section" id="popular">
            <div class="container">
                <span class="section__subtitle">Housell.</span>
                <h1 class="section__title">
                    Post a For Sale by Owner Listing<span>.</span>
                </h1>
            </div>

            <div class="sale__container container">
                <div class="sale__box">
                    <div class="sale__elements">
                        <span class="sale-label">FOR SALE BY OWNER</span>
                        <input type="text" id="address" class="sale-input-label" placeholder="Street address">
                        <a href="signinup.php" class="signin-text">Sign In to submit this posting</a>
                    </div>
                    <div class="sale__elements">
                        <input type="text" id="unit" class="sale-input" placeholder="Unit (Optional)">
                    </div>
                    <div class="sale__elements">
                        <input type="text" id="unit" class="sale-input" placeholder="City">
                    </div>
                    <div class="sale__elements">
                        <select id="combo-box" class="sale__combo-box">
                          <option value=""></option>
                          <option value="">Option1</option>
                          <option value="">Option</option>
                          <option value="">Option3</option>
                        </select>
                    </div>
                    <div class="sale__elements">
                        <input type="text" id="unit" class="sale-input-zip" placeholder="ZIP">
                    </div>
                    <div class="sale__button">
                        <a href="signinup.php" name="continue" type="submit" id="continue" value="Continue" class="button sale-button">CONTINUE</a>
                    </div>
                </div>
            </div>
        </section>
        <!--==================== COMPANY ====================-->
        <section class="company section" id="">
            <div class="company__container container grid">
                <div class="company__titles">
                    <h1 class = "company__title">
                        Why post on Housell?
                    </h1>

                    <div class="company__logos">
                        <div class="image-container">
                          <img src="Assect/Image/logohouse.png" alt="Image 1">
                          <div class="company__description">
                            He has followed up with me quickly and <br>
                            always  replies to my texts and call.
                          </div>
                        </div>
                        <div class="image-container">
                          <img src="Assect/Image/logohouse.png" alt="Image 2">
                          <div class="company__description">
                            He has followed up with me quickly and <br>
                            always  replies to my texts and call.
                          </div>
                        </div>
                        <div class="image-container">
                          <img src="Assect/Image/logohouse.png" alt="Image 3">
                          <div class="company__description">
                            He has followed up with me quickly and <br>
                            always  replies to my texts and call.
                          </div>
                        </div>
                      </div>
        </section>

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
                    &#169; Bedimcode. All rights reserved
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