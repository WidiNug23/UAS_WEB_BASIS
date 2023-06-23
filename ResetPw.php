<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
        <title>Reset PW</title>
       <link rel="stylesheet" href="Assect/CSS/forgetpw.css">

        <!-- Font Awesome Cdn Link -->

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<form action="proses.php" method="POST">
    <div class="wrapper">
        <a href="signinup.php" class="close-icon"><i class='bx bx-x'></i></a>
        <h1 class="reset">Reset</h1>
        <p class="description">Recovery your password <br> that has been missed!</p>
        <input type="text" placeholder="Name" name="name">
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" name="reset" id="reset" class="button">Reset</button>
    </div>
</form>

</body>
</html>
