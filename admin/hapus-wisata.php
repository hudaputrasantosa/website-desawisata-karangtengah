<?php
include('./config.php');

$id = $_GET['id_wisata'];
$query = mysqli_query($konfigur, "DELETE FROM wisata WHERE id_wisata='$id'");
if ($query) {
   header("location: ./wisata-admin?successDelete");
} else {
   header("location: ./wisata-admin?failedDelete");
}
