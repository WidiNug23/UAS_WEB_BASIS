<!DOCTYPE html>
<html>
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
        <link rel="stylesheet" href="Assect/CSS/signinup.css">

        
        <title>Sign In & Sign Up</title>
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <div class="container" id="main">
            <div class="sign-up">
            <a href="Index.php" class="close-icon1"><i class='bx bx-x'></i></a>
                <form action="proses.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                    <h1 class="text-signup">Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class='bx bxl-google'></i></a>
                        <a href="#" class="social"><i class='bx bxl-apple'></i></a>
                        <a href="#" class="social"><i class='bx bxl-facebook'></i></a>
                    </div>

                    <p class="another-acc">Or use your email for registration</p>

                    <input type="text" name="nama" id="nama" placeholder="Nama" required="" class="input">
                    <input type="email" name="email" id="email" placeholder="Email" required="" class="input">
                    <input type="password" name="password" id="password" placeholder="Password" required="" class="input">

                    <button type="submit" name="sign__up" id="sign__up" class="button">Sign Up</button>
                </form>
            </div>

            <div class="sign-in">
            <a href="Index.php" class="close-icon2"><i class='bx bx-x'></i></a>
            <i class='bx bx-moon change-theme1' id="theme-button1" ></i>
                <form action="proses.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                    <h1 class="text-signin">Sign In</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class='bx bxl-google'></i></a>
                        <a href="#" class="social"><i class='bx bxl-apple'></i></a>
                        <a href="#" class="social"><i class='bx bxl-facebook'></i></a>
                    </div>

                    <p class="another-acc">Or use your account</p>

                    <input type="email" name="email" id="email" placeholder="Email" required="" class="input">
                    <input type="password" name="password" id="password" placeholder="Password" required="" class="input">
                    <a href="ResetPw.php" class="forget-pw">Forget your password</a>

                    <button type="submit" name="sign__in" id="sign__in" class="button">Sign In</button>
                </form>
            </div>

            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-left">
                        <h1 class="welcome-housell">Welcome to Housell!</h1>
                        <p class="another-acc">To keep connected with us please login with your personal info</p>
                        <button id="SignIn">Sign In</button>
                    </div>

                    <div class="overlay-right">
                        <h1 class="hello-friends">Hello Friends!</h1>
                        <p class="another-acc">Enter your personal details and start journey with us</p>
                        <button id="SignUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>

        <!--=============== MAIN JS ===============-->
        <script src="Assect/JS/signinup.js"></script>
    </body>
</html>