<?php
include('./config.php');

if (isset($_POST["submit"])) {
   $id = $_POST['id_pengurus'];
   $namaPengurus = $_POST['nama'];
   $jabatan = $_POST["jabatan"];
   $tmp_img    = $_POST["_tempimg"];


   $target_dir     = "../assets/img/pengurus/";
   $target_file    = $target_dir . basename($_FILES["image"]["name"]);
   $uploadOk       = 1;
   $imageFileType  = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
   $temp           = explode(".", $_FILES["image"]["name"]);
   $newfilename    = round(microtime(true)) . '.' . end($temp);
   $temp_img       = $_FILES['image']['name'];



   if (isset($_POST["submit"])) {
      if (!$temp_img == "") {
         $check = getimagesize($_FILES["image"]["tmp_name"]);
         if ($check !== false) {
            $uploadOk = 1;
         } else {
            header("location: ./update-foto");
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
               $query = mysqli_query($konfigur, "UPDATE pengurus set nama_pengurus ='$namaPengurus', jabatan='$jabatan', foto_pengurus='$newfilename' WHERE id_pengurus ='$id'");

               if ($query) {
                  header("location: ./foto-pengurus?successUpdate");
               } else {
                  echo 'Data gagal diinput. Silahkan coba lagi';
               }
            } else {
               header("location: ../foto-pengurus", true, 200);
            }
         }
      } else {
         $query = mysqli_query($konfigur, "UPDATE pengurus set nama_pengurus ='$namaPengurus', jabatan='$jabatan', foto_pengurus='$tmp_img' WHERE id_pengurus ='$id'");
         if ($query) {
            header("location: ./foto-pengurus?successUpdate");
         } else {
            echo 'Data gagal diinput. Silahkan coba lagi' . mysqli_error($konfigur);
         }
      }
   }
}
