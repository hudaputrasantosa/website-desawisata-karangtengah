<?php
include('./config.php');

$id = $_GET['id_produk'];
$query = mysqli_query($konfigur, "DELETE FROM produk WHERE id_produk='$id'");
if ($query) {
   header("location: ./produk-admin?successDelete");
} else {
   header("location: ./produk-admin?failedDelete");
}
