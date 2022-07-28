<?php
include('./config.php');

if (isset($_POST["submit"])) {
   $namaPengurus = $_POST['nama'];
   $jabatan = $_POST["jabatan"];

   $target_dir     = "../assets/img/pengurus/";
   $target_file    = $target_dir . basename($_FILES["image"]["name"]);
   $uploadOk       = 1;
   $imageFileType  = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
   $temp           = explode(".", $_FILES["image"]["name"]);
   $newfilename    = round(microtime(true)) . '.' . end($temp);
   $temp_img       = $_FILES['image']['name'];



   if (isset($_POST["submit"])) {
      $check = getimagesize($_FILES["image"]["tmp_name"]);
      if ($check !== false) {
         $uploadOk = 1;
      } else {
         header("location: ./tambah-foto");
      }
   }
   // Check if file already exists
   if (file_exists($target_file)) {
      echo 2;
      $uploadOk = 0;
   }

   // Check file size
   if ($_FILES["image"]["size"] > 2000000) {
      $uploadOk = 0;
      echo 3;
   }

   // Allow certain file formats
   if (
      $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif"
   ) {
      echo 4;
      $uploadOk = 0;
   }

   // Check if $uploadOk is set to 0 by an error
   if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
   } else {
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir . $newfilename)) {
         $nama = htmlspecialchars(basename($_FILES["image"]["name"]));
         $query = mysqli_query($konfigur, "INSERT INTO pengurus VALUES ('', '$namaPengurus','$jabatan','$newfilename')");

         if ($query) {
            header("location: ./foto-pengurus?successAddFoto");
         } else {
            echo 'Data gagal diinput. Silahkan coba lagi' . mysqli_error($konfigur);
         }
      } else {
         header("location: ./foto-pengurus", true, 200);
      }
   }
}
