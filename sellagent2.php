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
        <link rel="stylesheet" href="Assect/CSS/sellagent.css">

        
        <title>Rentals - Housell</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="Index2.php" class="nav__logo">
                    Housell <i class='bx bxs-home-alt-2'></i>
                </a>
                
                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="Index2.php" class="nav__link active-link">
                                <i class='bx bx-home-alt-2' ></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="Buy2.php" class="nav__link">
                                <i class='bx bx-building-house'></i>
                                <span>Buy</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="Sell2.php" class="nav__link">
                                <i class='bx bx-award'></i>
                                <span>Sell</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="Contact2.php" class="nav__link">
                                <i class='bx bx-phone'></i>
                                <span>Contact</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="Rentals2.php" class="nav__link">
                                <i class='bx bxs-help-circle'></i>
                                <span>Manager Rentals</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Theme change button -->
                <i class='bx bx-moon change-theme' id="theme-button" ></i>

                <a href="signinup.php" class="button nav__button">
                    Log Out
                </a>
            </nav>
        </header>

        <!--==================== HOME ====================-->
            <main class="main">
        <!--=========== IMAGE ==========-->
                <section class="image__contact">
                    <img src="Assect/Image/anjy.jpg" alt="" class="image__size">
                </section>
        <!--==================== SEARCH ====================-->
        <section class="section" id="popular">
            <div class="container">
                <span class="section__subtitle">Housell.</span>
                <h2 class="section__title">
                    Post a For Sale by Owner Listing<span>.</span>
                </h2>
            </div>

            <div class="search__container container">
                <div class="search__box">
                    <div class="search__elements">
                        <label for="location" class="search-label">Location</label>
                        <input type="text" id="location" class="search-input" placeholder="Location">
                    </div>
                    <div class="search__elements">
                        <label for="name" class="search-label">Name</label>
                        <input type="text" id="name" name="name" class="search-input" placeholder="Agents Name">
                    </div>
                    <div class="search__elements">
                        <label for="specialist" class="search-label">Specialist</label>
                        <select id="specialist" name="specialist" class="search__combo-box">
                          <option value="">Listing Agents</option>
                          <option value="doctor">Option1</option>
                          <option value="dentist">Option</option>
                          <option value="therapist">Option3</option>
                        </select>
                    </div>
                    <div class="search__elements">
                        <label for="languages" class="search-label">languages</label>
                        <select id="languages" name="languages" class="search__combo-box">
                          <option value="">English</option>
                          <option value="">Option1</option>
                          <option value="">Option</option>
                          <option value="">Option3</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>
        <!--==================== FEATURED ====================-->
        <section class="featured section" id="">
            <div class="featured__container container grid">
                <div class="">
                    <h3 class = "featured__tittle">
                        FEATURED AGENTS
                    </h3>

                    <div class="featured-cards">
                        <div class="featured-card">
                            <div class="featured__picture">
                                <img src="Assect/Image/OIP.jpg" alt="Profile Picture">
                            </div>
                            <div class ="featured-detail">
                                <h3 class="featured-name">Charmin H. Russell</h3>
                                <div class="featured-rating">
                                    <span class="bx bx-star"></span>
                                    <span class="bx bx-star"></span>
                                    <span class="bx bx-star"></span>
                                    <span class="bx bx-star"></span>
                                    <span class="bx bx-star"></span>
                                </div>
                                <i class='bx bxs-phone'></i>
                                <span>113-343-434-34</span>
                            </div>
                        </div>

                        <div class="featured-card">
                            <div class="featured__picture">
                                <img src="Assect/Image/OIP.jpg" alt="Profile Picture">
                            </div>
                            <div class ="featured-detail">
                                <h3 class="featured-name">Charmin H. Russell</h3>
                                <div class="featured-rating">
                                    <span class="bx bx-star"></span>
                                    <span class="bx bx-star"></span>
                                    <span class="bx bx-star"></span>
                                    <span class="bx bx-star"></span>
                                    <span class="bx bx-star"></span>
                                </div>
                                <i class='bx bxs-phone'></i>
                                <span>113-343-434-34</span>
                                </div>
                        </div>

                        <div class="featured-card">
                            <div class="featured__picture">
                                <img src="Assect/Image/OIP.jpg" alt="Profile Picture">
                            </div>
                            <div class ="featured-detail">
                            <h3 class="featured-name">Charmin H. Russell</h3>
                            <div class="featured-rating">
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                            </div>
                            <i class='bx bxs-phone'></i>
                            <span>113-343-434-34</span>
                            </div>
                        </div>  
                      </div>
                </div>
            </div>
        </section>

        <!--==================== AGENT TABLE ====================-->
        <section class="agents__tables section" id="">
            <div class="agent__container container grid">
                <table class="agent-table">
                    <thead>
                      <tr>
                        <th>Agent</th>
                        <th>Location</th>
                        <th>Client Review</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="agent-card">
                            <div class="featured__picture">
                                <img src="Assect/Image/OIP.jpg" alt="Profile Picture">
                            </div>
                            <div class ="featured-detail">
                            <h3 class="featured-name">Charmin H. Russell</h3>
                            <div class="featured-rating">
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                            </div>
                            <i class='bx bxs-phone'></i>
                            <span>113-343-434-34</span>
                            </div>
                          </div>
                        </td>
                        <td>Location 1</td>
                        <td>
                            <p class="client-review">
                                Review 25/1/2023
                            </p>
                            <br>
                            <p class="client-description">He has followed up with me quickly and <br>
                                always  replies to my texts and call.</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="agent-card">
                            <div class="featured__picture">
                                <img src="Assect/Image/OIP.jpg" alt="Profile Picture">
                            </div>
                            <div class ="featured-detail">
                            <h3 class="featured-name">Charmin H. Russell</h3>
                            <div class="featured-rating">
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                            </div>
                            <i class='bx bxs-phone'></i>
                            <span>113-343-434-34</span>
                            </div>
                        </div>
                          </div>
                        </td>
                        <td>Location 2</td>
                        <td>
                            <p class="client-review">
                                Review 25/1/2023
                            </p>
                            <br>
                            <p class="client-description">He has followed up with me quickly and <br>
                                always  replies to my texts and call.</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="agent-card">
                            <div class="featured__picture">
                                <img src="Assect/Image/OIP.jpg" alt="Profile Picture">
                            </div>
                            <div class ="featured-detail">
                            <h3 class="featured-name">Charmin H. Russell</h3>
                            <div class="featured-rating">
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                            </div>
                            <i class='bx bxs-phone'></i>
                            <span>113-343-434-34</span>
                            </div>
                          </div>
                        </td>
                        <td>Location 1</td>
                        <td>
                            <p class="client-review">
                                Review 25/1/2023
                            </p>
                            <br>
                            <p class="client-description">He has followed up with me quickly and <br>
                                always  replies to my texts and call.</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="agent-card">
                            <div class="featured__picture">
                                <img src="Assect/Image/OIP.jpg" alt="Profile Picture">
                            </div>
                            <div class ="featured-detail">
                            <h3 class="featured-name">Charmin H. Russell</h3>
                            <div class="featured-rating">
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                            </div>
                            <i class='bx bxs-phone'></i>
                            <span>113-343-434-34</span>
                            </div>
                          </div>
                        </td>
                        <td>Location 1</td>
                        <td>
                            <p class="client-review">
                                Review 25/1/2023
                            </p>
                            <br>
                            <p class="client-description">He has followed up with me quickly and <br>
                                always  replies to my texts and call.</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="agent-card">
                            <div class="featured__picture">
                                <img src="Assect/Image/OIP.jpg" alt="Profile Picture">
                            </div>
                            <div class ="featured-detail">
                            <h3 class="featured-name">Charmin H. Russell</h3>
                            <div class="featured-rating">
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                                <span class="bx bx-star"></span>
                            </div>
                            <i class='bx bxs-phone'></i>
                            <span>113-343-434-34</span>
                            </div>
                          </div>
                        </td>
                        <td>Location 1</td>
                        <td>
                            <p class="client-review">
                                Review 25/1/2023
                            </p>
                            <br>
                            <p class="client-description">He has followed up with me quickly and <br>
                                always  replies to my texts and call.</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
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
                            <a href="https://www.facebook.com/asis.wisesa/" target="blank" class="footer_social-link">
                                <i class='bx bxl-facebook-circle' ></i>
                            </a>
                            <a href="https://www.instagram.com/winaskye__/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-instagram-alt' ></i>
                            </a>
                            <a href="#" target="blank" class="footer_social-link">
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