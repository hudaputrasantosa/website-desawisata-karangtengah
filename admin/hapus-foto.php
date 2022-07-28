<?php
include('./config.php');

$id = $_GET['id_pengurus'];
$query = mysqli_query($konfigur, "DELETE FROM pengurus WHERE id_pengurus='$id'");
if ($query) {
   header("location: ./foto-pengurus?successDelete");
} else {
   header("location: ./foto-pengurus?failedDelete");
}
