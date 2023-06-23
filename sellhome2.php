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
                            <a href="Index2.html" class="nav__link active-link">
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
        <!--==================== SALE ====================-->
        <section class="section" id="popular">
            <div class="container">
                <span class="section__subtitle">Housell.</span>
                <h1 class="section__title">
                    Post a For Sale by Owner Listing<span>.</span>
                </h1>
            </div>

            <style>
        .popup {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: #f9f9f9;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  z-index: 9999;
}

.popup h1 {
  font-size: 24px;
  margin: 0;
  padding-bottom: 10px;
}

.popup h2 {
  font-size: 18px;
  margin: 0;
  padding-bottom: 20px;
}

.popup .close-icon {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 24px;
  cursor: pointer;
}

.popup form {
  display: grid;
  gap: 10px;
}

.popup label {
  font-weight: bold;
}

.popup input[type="text"],
.popup input[type="file"],
.popup textarea {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.popup input[type="submit"] {
  background: #4caf50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

.popup input[type="submit"]:hover {
  background: hsl(228, 66%, 53%);
}

.popup textarea {
  resize: vertical;
}

.popup .error-message {
  color: red;
  font-size: 14px;
}


        .close-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>

    <div class="sale__container container">
        <div class="sale__box">
            <div class="sale__elements">
                <span class="sale-label">FOR SALE BY OWNER</span>
                <input type="text" name="address" id="addressInput" class="sale-input-label" placeholder="Street address">
                <p class="signin-text">Sign In to submit this posting</p>
            </div>
            <div class="sale__elements">
                <input type="text" name="unit" id="unitInput" class="sale-input" placeholder="Unit (Optional)">
            </div>
            <div class="sale__elements">
                <input type="text" name="city" id="cityInput" class="sale-input" placeholder="City">
            </div>
            <div class="sale__elements">
                <select name="negara" id="countryInput" class="sale__combo-box">
                    <option value=""></option>
                    <option value="IDN" class="country">Indonesia</option>
                    <option value="USA" class="country">United States</option>
                    <option value="RUS" class="country">Russia</option>
                </select>
            </div>
            <div class="sale__elements">
                <input type="text" name="zip" id="zipInput" class="sale-input-zip" placeholder="ZIP">
            </div>
            <div class="sale__button">
                <input name="continue" type="submit" id="continue" value="Continue" class="button sale-button" onclick="showPopup()" />
            </div>
        </div>
    </div>

    
    <script>
        function showPopup() {
            // Mengambil nilai dari input
            var address = document.getElementById("addressInput").value;
            var unit = document.getElementById("unitInput").value;
            var city = document.getElementById("cityInput").value;
            var country = document.getElementById("countryInput").value;
            var zip = document.getElementById("zipInput").value;

            // Membuat elemen popup
            var popup = document.createElement("div");
            popup.className = "popup";

            // Membuat form di dalam popup
            var form = document.createElement("form");
            form.setAttribute("method", "post");
            form.setAttribute("enctype", "multipart/form-data");
            form.setAttribute("action", "prosessell.php"); // Ubah "prosessell.php" sesuai dengan nama file PHP untuk menyimpan data

            // Membuat judul popup
            var title = document.createElement("h1");
            title.innerHTML = "Edit Address";
            form.appendChild(title);

            // Membuat subjudul popup
            var subtitle = document.createElement("h2");
            subtitle.innerHTML = "Please update your address details";
            form.appendChild(subtitle);

            // Membuat input address di dalam form
            var addressInput = document.createElement("input");
            addressInput.setAttribute("type", "text");
            addressInput.setAttribute("name", "address");
            var addressLabel = document.createElement("label");
            addressLabel.innerHTML = "Street Address: ";
            form.appendChild(addressLabel);
            addressInput.setAttribute("placeholder", "input Street Address");
            addressInput.value = address; // Menampilkan nilai address di input field
            form.appendChild(addressInput);

            // Membuat input unit di dalam form
            var unitInput = document.createElement("input");
            unitInput.setAttribute("type", "text");
            unitInput.setAttribute("name", "unit");
            var unitLabel = document.createElement("label");
            unitLabel.innerHTML = "Unit: ";
            form.appendChild(unitLabel);
            unitInput.setAttribute("placeholder", "input Unit (Optional)");
            unitInput.value = unit; // Menampilkan nilai unit di input field
            form.appendChild(unitInput);

            // Membuat input city di dalam form
            var cityInput = document.createElement("input");
            cityInput.setAttribute("type", "text");
            cityInput.setAttribute("name", "city");
            var cityLabel = document.createElement("label");
            cityLabel.innerHTML = "City: ";
            form.appendChild(cityLabel);
            cityInput.setAttribute("placeholder", "input City");
            cityInput.value = city; // Menampilkan nilai city di input field
            form.appendChild(cityInput);

            // Membuat input country di dalam form
            var countryInput = document.createElement("input");
            countryInput.setAttribute("type", "text");
            countryInput.setAttribute("name", "country");
            var countryLabel = document.createElement("label");
            countryLabel.innerHTML = "Country: ";
            form.appendChild(countryLabel);
            countryInput.setAttribute("placeholder", "input Country");
            countryInput.value = country; // Menampilkan nilai country di input field
            form.appendChild(countryInput);

            // Membuat input zip di dalam form
            var zipInput = document.createElement("input");
            zipInput.setAttribute("type", "text");
            zipInput.setAttribute("name", "zip");
            var zipLabel = document.createElement("label");
            zipLabel.innerHTML = "ZIP: ";
            form.appendChild(zipLabel);
            zipInput.setAttribute("placeholder", "input ZIP");
            zipInput.value = zip; // Menampilkan nilai zip di input field
            form.appendChild(zipInput);

            // Membuat input harga
            var priceInput = document.createElement("input");
            priceInput.setAttribute("type", "text");
            priceInput.setAttribute("name", "price");
            var priceLabel = document.createElement("label");
            priceLabel.innerHTML = "Price: ";
            form.appendChild(priceLabel);
            priceInput.setAttribute("placeholder", "input Price");
            form.appendChild(priceInput);

            // Membuat input foto
            var imageInput = document.createElement("input");
            imageInput.setAttribute("type", "file");
            imageInput.setAttribute("name", "foto");
            var imageLabel = document.createElement("label");
            imageLabel.innerHTML = "Photo: ";
            form.appendChild(imageLabel);
            form.appendChild(imageInput);

            // Membuat textarea deskripsi
            var descriptionTextarea = document.createElement("textarea");
            descriptionTextarea.setAttribute("name", "description");
            descriptionTextarea.setAttribute("placeholder", "input Description");
            form.appendChild(descriptionTextarea);

            // Menambahkan tombol submit
            var submitButton = document.createElement("input");
            submitButton.setAttribute("type", "submit");
            submitButton.setAttribute("value", "Submit");
            form.appendChild(submitButton);

            // Menambahkan event listener pada tombol submit
            submitButton.addEventListener("click", function(event) {
                event.preventDefault();

                var price = priceInput.value;
                var description = descriptionTextarea.value;

                if (address === "" || city === "" || country === "" || zip === "" || price === "" || description === "") {
                    alert("Please fill in all required fields!");
                    return;
                }

                var formData = new FormData();
                formData.append("address", address);
                formData.append("unit", unit);
                formData.append("city", city);
                formData.append("country", country);
                formData.append("zip", zip);
                formData.append("price", price);
                formData.append("foto", imageInput.files[0]);
                formData.append("description", description);

                var xhr = new XMLHttpRequest();
                xhr.open("POST", "prosessell.php", true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        alert("Upload Successfully");
                        window.location.href = 'buy2.php';
                    } else if (xhr.readyState === 4 && xhr.status !== 200) {
                        alert("Error: " + xhr.statusText);
                    }
                };
                xhr.send(formData);
            });

            // Menambahkan form ke dalam popup
            popup.appendChild(form);

            // Menambahkan ikon close pada popup
            var closeIcon = document.createElement("span");
            closeIcon.className = "close-icon";
            closeIcon.innerHTML = "&times;"; // Tanda "X"
            closeIcon.onclick = function () {
                document.body.removeChild(popup); // Menghapus popup saat ikon close diklik
            };
            popup.appendChild(closeIcon);

            // Menambahkan popup ke dalam body dokumen
            document.body.appendChild(popup);
        }



    </script>
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