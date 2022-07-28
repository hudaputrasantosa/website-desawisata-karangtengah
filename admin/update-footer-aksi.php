<?php
include('config.php');

if (isset($_POST['submit'])) {

  $deskripsi  = $_POST['deskripsi'];
  $alamat  = $_POST['alamat'];
  $telepon  = $_POST['telepon'];
  $maps  = $_POST['maps'];
  $instagram  = $_POST['instagram'];
  $facebook  = $_POST['facebook'];
  $twitter  = $_POST['twitter'];
  $query = mysqli_query($konfigur, "UPDATE footer SET deskripsi = '$deskripsi', alamat = '$alamat', telepon = '$telepon', maps = '$maps', instagram = '$instagram', facebook = '$facebook', twitter = '$twitter'");

  if ($query) {
    header("location: footer-admin");
  } else {
    echo 'Data gagal diinput. Silahkan coba lagi <a href="footer-admin.php">Di sini</a>';
  }
} else {
  header("location: footer-admin.php");
}
