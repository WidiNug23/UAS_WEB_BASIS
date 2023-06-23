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
        <link rel="stylesheet" href="Assect/CSS/buy.css">

        
        <title>Buy - Housell</title>
    </head>

    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    Housell <i class='bx bxs-home-alt-2'></i>
                </a>
                
                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="Index.php" class="nav__link">
                                <i class='bx bx-home-alt-2' ></i>
                                <span class="color-nav-link">Home</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="Buy.php" class="nav__link">
                                <i class='bx bx-building-house'></i>
                                <span class="color-nav-link">Buy</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="Sell.php" class="nav__link">
                                <i class='bx bx-award'></i>
                                <span class="color-nav-link">Sell</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="Contact.php" class="nav__link">
                                <i class='bx bx-phone'></i>
                                <span class="color-nav-link">Contact</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="Rentals.php" class="nav__link">
                                <i class='bx bxs-help-circle'></i>
                                <span class="color-nav-link">Manager Rentals</span>
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


        <!--==================== SEARCH AND DROPDOWNS ====================-->
        <div class="search-bar">
            <input type="text" class="search-input" placeholder="Search...">
            <select class="dropdown">
                <option value="" disabled selected>Select an option</option>
                <option value="option1" hidden>Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
            </select>

            <select class="dropdown">
                <option value="" disabled selected>Select an option</option>
                <option value="option1" hidden>Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
            </select>

            <select class="dropdown">
                <option value="" disabled selected>Select an option</option>
                <option value="option1" hidden>Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
            </select>

            <button class="save-button">Search</button>
        </div>


        <!--==================== BOX BUY ====================-->
        <section class="section" id="">
    <div class="container">
        <div class="box__container">
            <?php
            // Koneksi ke database
            $servername = "localhost";  // Ganti dengan nama server Anda
            $username = "root";     // Ganti dengan username MySQL Anda
            $password = "";     // Ganti dengan password MySQL Anda
            $dbname = "home_estate";    // Ganti dengan nama database Anda

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Koneksi ke database gagal: " . $conn->connect_error);
            }

            // Query untuk mengambil data dari tabel sell
            $sql = "SELECT address, unit, city, country, zip, price, foto, description FROM sell";
            $result = $conn->query($sql);

            // Loop untuk menampilkan data
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $address = $row['address'];
                    $unit = $row['unit'];
                    $city = $row['city'];
                    $country = $row['country'];
                    $zip = $row['zip'];
                    $price = $row['price'];
                    $foto = $row['foto'];
                    $description = $row['description'];
            ?>
           <!-- Box -->
<article class="box__card">
    <a href="signinup.php">
        <img src="<?php echo isset($foto) ? 'Assect/Image/' . $foto : 'path/to/default/image.jpg'; ?>" alt="" class="box__img">
    </a>
    <div class="box__data">
        <a href="signinup.php" class="box__link">
            <h2 class="box_price">
                <span>$</span> <?php echo $price; ?>
            </h2>
            <h3 class="box__title">
                <?php echo $address; ?>
            </h3>
            <p class="box__description">
                <?php echo $city; ?>, <?php echo $country; ?> <?php echo $zip; ?>
            </p>
        </a>
    </div>
</article>



<?php
    }
} else {
    echo "Tidak ada data yang ditemukan.";
}

?>

<style>
    .popup {
        display: none;
        /* tambahkan gaya lain yang diperlukan */
    }
</style>

<div id="popup" class="popup">
    <span class="close" onclick="hidePopup()">&times;</span>
    <img src="<?php echo isset($foto) ? 'Assect/Image/' . $foto : 'path/to/default/image.jpg'; ?>" alt="" class="popup__img">
    <ul class="popup_list">
    <li a href="#" class="nav__logo">
                    Housell <i class='bx bxs-home-alt-2'></i>
                </a></li>
                <hr class="popup__divider">
    <li class="popup__price"><span>$</span><?php echo $price; ?></li>
    <li class="popup__address"><span></span><?php echo $address; ?></li>
    <li class="popup__buttons">
        <button class="popup__tour-button">Request a Tour</button>
        <button class="popup__contact-button">Contact Agent</button>
    </li>
    <hr class="popup__divider">
    <li class="popup__desc_h">Overview</li>
    <li class="popup__desc"><?php echo $description; ?></li>
</ul>

</div>



<script>
    var popup = document.getElementById("popup");

    function showPopup(foto, price, description) {
        // Menampilkan foto di popup
        document.getElementById("popupImage").src = "Assect/Image/" + foto;
        document.getElementById("popupImage").alt = foto;

        // Menampilkan harga di popup
        document.getElementById("popupPrice").textContent = price;

        // Menampilkan deskripsi di popup
        document.getElementById("popupDescription").textContent = description;

        // Menampilkan popup
        popup.style.display = "block";
    }

    function hidePopup() {
        // Menyembunyikan popup
        popup.style.display = "none";
    }
</script>

            
        </div>
    </div>
</section>
        

        <!--=============== SCROLLREVEAL ===============-->
        <script src="Assect/JS/scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="Assect/JS/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="Assect/JS/main.js"></script>
        <script src="Assect/JS/buy.js"></script>

        <!--===== GOOGLE MAPS API=====-->
    </body>
</html>