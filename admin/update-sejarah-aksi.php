<?php

if (isset($_POST['submit'])) {

// Get reference to uploaded image
$deskripsi = $_POST["deskripsi"];
$image_file = $_FILES["image"];

// Exit if no file uploaded
if (!isset($image_file)) {
    die('FIle Belum DI Upload');
}

// Exit if is not a valid image file
$image_type = exif_imagetype($image_file["tmp_name"]);
if (!$image_type) {
    die('File Bukan Gambar');
}

// Get file extension based on file type, to prepend a dot we pass true as the second parameter
$image_extension = image_type_to_extension($image_type, true);

// Create a unique image name
$image_name = bin2hex(random_bytes(16)) . $image_extension;

// Move the temp image file to the images directory
move_uploaded_file(
    // Temp image location
    $image_file["tmp_name"],

    // New image location
    __DIR__ . "./assets/img/sejarah" . $image_name
);


$query = mysqli_query($konfigur, "UPDATE sejarah SET deskripsi = '$deskripsi', foto = '$image_file'");

if($query){
    header("location: ./dashboard?pesan=successUpdate");
} else {
    header("location: ./update-sejarah-aksi?pesan=gagalUpdate");
} 

} else{
    header("location: ./update-sejarah-aksi");
}