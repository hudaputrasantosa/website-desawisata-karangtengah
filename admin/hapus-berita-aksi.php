<?php
include('./config.php');

$id = $_GET['idBerita'];
$query = mysqli_query($konfigur, "DELETE FROM berita WHERE id_berita='$id'");
if($query){
header("location: ./berita-admin?successDelete");
} else{
    header("location: ./berita-admin?failedDelete");
}

?>