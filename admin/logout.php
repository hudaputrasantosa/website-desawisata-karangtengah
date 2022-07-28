<?php
include './config.php';
session_start();
$out = session_destroy();

if ($out) {
   header("location: ./index?page=logout");
} else {
   header("location : ./dashboar");
}
