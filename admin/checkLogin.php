<?php
session_start();
include './config.php';

$user = $_POST['username'];
$pw = $_POST['password'];

$query = "SELECT * FROM admin WHERE username='$user' AND password='$pw' ";
$getData = mysqli_query($konfigur, $query);
$check = mysqli_num_rows($getData);

if ($check > 0) {
   $data = mysqli_fetch_assoc($getData);
   $_SESSION['username'] = $user;
   $_SESSION['password'] = $pw;
   $_SESSION['login'] = true;

   header('location: ./dashboard.php?suksesLogin');
   // echo 'berhasil';
} else {
   header('location: ./?gagalLogin');
   // echo ' gagal';
}
