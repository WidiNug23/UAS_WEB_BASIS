<?php
session_start();

$koneksi = mysqli_connect('localhost', 'root', '', 'home_estate');

if (!$koneksi) {
    die("Koneksi dengan database gagal: " . mysqli_connect_errno() . mysqli_connect_error());
}

// Fungsi untuk menyimpan data ke database saat sign up
function signUp($nama, $email, $password)
{
    global $koneksi;

    // Melakukan sanitasi data sebelum disimpan ke database
    $nama = mysqli_real_escape_string($koneksi, $nama);
    $email = mysqli_real_escape_string($koneksi, $email);
    $password = mysqli_real_escape_string($koneksi, $password);

    // Menyimpan data ke tabel pengguna
    $sql = "INSERT INTO signup (nama, email, password) VALUES ('$nama', '$email', '$password')";

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Registasi Berhasil'); window.location.href='signinup.php'</script> ";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}

// Fungsi untuk mengambil data dari database saat sign in
function signIn($email, $password)
{
    global $koneksi;

    // Melakukan sanitasi data sebelum digunakan dalam query
    $email = mysqli_real_escape_string($koneksi, $email);
    $password = mysqli_real_escape_string($koneksi, $password);

    // Memeriksa keberadaan pengguna dengan email dan password yang sesuai
    $sql = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Pengguna ditemukan, lakukan tindakan selanjutnya (misalnya, tampilkan halaman selamat datang)
        $_SESSION['email'] = $email; // Menyimpan email pengguna dalam session
        echo "<script>alert('Login berhasil'); window.location.href='Index2.php'</script> ";
    } else {
        // Pengguna tidak ditemukan atau kombinasi email dan password salah
        echo "<script>alert('Email atau password salah'); window.location.href='signinup.php'</script> ";
    }
}

// Fungsi untuk lupa password
// Fungsi untuk memperbarui password
function changePassword($name, $email, $password)
{
    global $koneksi;

    // Melakukan sanitasi data sebelum digunakan dalam query
    $name = mysqli_real_escape_string($koneksi, $name);
    $email = mysqli_real_escape_string($koneksi, $email);
    $newPassword = mysqli_real_escape_string($koneksi, $password);

    // Memperbarui password pengguna berdasarkan nama dan email
    $sql = "UPDATE signup SET password = '$newPassword' WHERE nama = '$name' AND email = '$email'";

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Password berhasil diubah'); window.location.href='signinup.php'</script>";
    } else {
        echo "<script>alert('Gagal mengubah password'); window.location.href='ResetPw.php'</script>";
    }
}

// Memproses perubahan password jika tombol "Reset" diklik
if (isset($_POST['reset'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Memastikan nama, email, dan password telah diisi
    if (!empty($name) && !empty($email) && !empty($password)) {
        changePassword($name, $email, $password);
    } else {
        echo "<script>alert('Harap lengkapi semua field'); window.location.href='ResetPw.php'</script>";
    }
}

// Fungsi untuk logout
function logout()
{
    session_destroy(); // Menghapus semua data session
    echo "<script>alert('Anda telah logout'); window.location.href='signinup.php'</script> ";
}

// Memproses form sign up
if (isset($_POST['sign__up'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    signUp($nama, $email, $password);
}

// Memproses form sign in
if (isset($_POST['sign__in'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    signIn($email, $password);
}

// Memproses logout jika tombol logout diklik
if (isset($_POST['logout'])) {
    logout();
}

mysqli_close($koneksi);
?>
