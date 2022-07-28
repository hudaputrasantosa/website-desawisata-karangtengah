<?php
include('config.php');

if (isset($_POST['submit'])) {

  echo $visi  = $_POST['visi'];
  echo $misi  = $_POST['misi'];
  $query = mysqli_query($konfigur, "UPDATE visi_misi SET visi_deskripsi = '$visi', misi_deskripsi = '$misi'");

  if ($query) {
    header("location: ./dashboard?pesan=successUpdate");
  } else {
    echo 'Data gagal diinput. Silahkan coba lagi <a href="update-visi-misi.php">Di sini</a>' . mysqli_error($konfigur);
  }
} else {
  header("location: update-visi-misi.php");
}
