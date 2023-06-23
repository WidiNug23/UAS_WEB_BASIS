<?php
session_start();

$koneksi = mysqli_connect('localhost', 'root', '', 'home_estate');

if (!$koneksi) {
    die("Koneksi dengan database gagal: " . mysqli_connect_errno() . mysqli_connect_error());
}

function showPopup($address, $unit, $city, $country, $zip, $price, $foto, $description)
{
    global $koneksi;

    $stmt = $koneksi->prepare("INSERT INTO sell (address, unit, city, country, zip, price, foto, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $address, $unit, $city, $country, $zip, $price, $foto, $description);

    if ($stmt->execute()) {
        echo "<script>alert('Upload Successfully'); window.location.href='buy2.php';</script>";
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$address = $_POST['address'];
$unit = $_POST['unit'];
$city = $_POST['city'];
$country = $_POST['country'];
$zip = $_POST['zip'];
$price = $_POST['price'];
$description = $_POST['description'];

if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $foto_name = $_FILES['foto']['name'];
    $foto_tmp = $_FILES['foto']['tmp_name'];
    $foto_path = "Assect/Image/" . $foto_name; // Ubah sesuai dengan lokasi folder gambar yang sesuai di server Anda
    move_uploaded_file($foto_tmp, $foto_path);
    $foto = $foto_name;
} else {
    $foto = null;
}

showPopup($address, $unit, $city, $country, $zip, $price, $foto, $description);
?>
