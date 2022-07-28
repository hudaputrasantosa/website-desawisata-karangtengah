<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>Detail Wisata</title>
   <link href="../assets/img/favicon.ico" rel="icon">

   <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="../assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="../css/carousel.css" rel="stylesheet">
   <link href="../css/mdb.min.css" rel="stylesheet">
   <link href="../css/style.css" rel="stylesheet">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
   <?php

   include '../component/header.php';
   include '../admin/config.php';
   $id = $_GET['id_wisata'];

   $getData = mysqli_query($konfigur, "SELECT * FROM wisata WHERE id_wisata='$id'");
   while ($row = mysqli_fetch_array($getData)) {
   ?>

      <div class="px-10 pt-5 my-5 text-center">
         <h1 class="display-5 fw-bold"><?= $row['nama_wisata']; ?></h1>
         <div class="col-lg-6 mx-auto">
            <p class="lead mb-5"><?= $row['deskripsi_wisata']; ?>
         </div>
         <i class="bi bi-geo-alt-fill"></i>Lokasi <a href="<?= $row['gmap']; ?>" target="_blank" class="mb-5"><?= $row['lokasi_wisata']; ?></a>

         <div class="overflow-hidden my-4">
            <div class="container px-5">
               <img src="../assets/img/wisata/<?= $row['foto']; ?>" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
            </div>
         </div>

      </div>


   <?php
   }
   mysqli_close($konfigur);
   include '../component/footer.php';
   ?>

   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

</html>