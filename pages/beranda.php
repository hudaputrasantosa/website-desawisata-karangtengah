<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>Desa Karangtengah</title>
   <link href="assets/img/favicon.ico" rel="icon">

   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="css/carousel.css" rel="stylesheet">
   <link href="css/mdb.min.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

   <!-- =======  Bagian Header ======= -->
   <header id="header" class="header fixed-top">
      <div class="container container-xl d-flex align-items-center justify-content-between">
         <a href="/index.html" class="logo align-items-center">
            <img src="assets/img/desa-karangtengah-2.png" alt="">
         </a>
         <!-- =======  Bagian Navigasi ======= -->
         <nav id="navbar" class="navbar">
            <ul>
               <li><a class="nav-link" href="">Beranda</a></li>
               <li class="dropdown"><a href=""><span>Profil Desa</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                     <li><a href="./pages/visi-misi">Visi dan Misi</a></li>
                     <li><a href="./pages/sejarah">Sejarah Desa</a></li>
                  </ul>
               </li>
               <li><a class="nav-link" href="./pages/berita-desa">Berita Desa</a></li>
               <li><a class="nav-link" href="./pages/wisata-desa">Wisata</a></li>
               <li><a class="nav-link" href="./pages/produk-desa">Produk Desa</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
         </nav>
      </div>
   </header>
   <!-- akhir dari header -->

   <!-- =======  Bagian Halaman Utama ======= -->
   <main id="main">
      <div class="container">
         <div class="row">

            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="overlay-image">
                        <img src="assets/img/banner/Banner1..jpg" class="d-block w-100" alt="...">
                     </div>
                     <div class="container">

                        <div class="carousel-caption">
                           <h1>DESA KARANG TENGAH</h1>
                           <p>Kecamatan Cilongok, Kabupaten Banyumas, Provinsi Jawa Tengah, Indonesia</p>

                        </div>
                     </div>
                  </div>

               </div>

            </div>
         </div>
      </div>

      <!--Main layout-->
      <main>
         <div class="container mb-4">
            <!--Grid row-->
            <div class="row">
               <!--Grid column-->
               <div class="col-md-10">
                  <!--Section: Content-->

                  <div class="mt-5">
                     <h3 style="font-weight: bold;">Berita Terkini</h3><br>
                  </div>






                  <!-- Post -->

                  <!-- <div class="row">
                        <div class="col-md-4 mb-4">
                           <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                              <img src="assets/img/beritaterkini/<?= $row['foto_berita']; ?>" class="img-fluid" />
                              <a href="#!">
                                 <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                              </a>
                           </div>
                        </div>

                        <div class="col-md-8 mb-4">
                           <h5 style="font-weight: bold;"><?= $row['judul_berita']; ?></h5>
                           <p class="mb-2">
                              <?= $row['deskripsi']; ?>
                           </p>
                           <button type="button" class="btn-hijau">Baca Selengkapnya</button>
                        </div>
                     </div> -->




                  <div class="album py-6">


                     <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 g-3">

                        <?php
                        include './admin/config.php';

                        $getBerita = mysqli_query($konfigur, "SELECT * FROM berita limit 3");
                        while ($row = mysqli_fetch_array($getBerita)) {
                        ?>
                           <div class="col">
                              <div class="card shadow-sm">
                                 <img src="./assets/img/beritaterkini/<?= $row['foto_berita']; ?>" style="width:100%; height:30vh; object-fit:cover; ;">

                                 <rect width="100%" fill="#55595c" />
                                 </img>
                                 <div class="card-body">
                                    <p><?= $row['tanggal_waktu']; ?></p>
                                    <h5><?= $row['judul_berita']; ?></h5>
                                    <div class="d-flex justify-content-between align-items-center">

                                       <a href="./pages/detail-berita?id_berita=<?= $row['id_berita']; ?>" class="my-2">Lihat Lengkap <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        <?php
                        }

                        ?>

                     </div>
                  </div>
               </div>

               <div class="pt-3 text-center mb-4 my-4">
                  <a href="./pages/berita-desa" class="btn-outline">Lihat Berita
                     Selengkapnya..</a>
               </div>
            </div>


         </div>
         </div>
         <!--Grid row-->
         </div>
      </main>
      <!--Main layout-->


      <div class="container mb-6">
         <h3 style="font-weight: bold;">Pengurus Desa</h3><br>
         <div class="row gy-4">
            <div class="owl-carousel owl-theme">
               <?php
               $getData = mysqli_query($konfigur, "SELECT * FROM pengurus");
               while ($rowPengurus = mysqli_fetch_array($getData)) {
               ?>
                  <div class="card">

                     <img src="./assets/img/pengurus/<?= $rowPengurus['foto_pengurus']; ?>" class="imgp" alt="">

                     <!-- <div class="embed-responsive embed-responsive-3by4">
                        <img src="./assets/img/pengurus/<?= $rowPengurus['foto_pengurus']; ?>" class="card-img-top embed-responsive-item" style="width: 100%; object-fit:cover;" alt="">
                     </div> -->
                     <div class="content">
                        <div class="title"><?= $rowPengurus['nama_pengurus']; ?></div>
                        <div class="sub-title pb-5"><?= $rowPengurus['jabatan']; ?></div>

                     </div>
                  </div>
               <?php }
               mysqli_close($konfigur); ?>
            </div>
         </div>
      </div>

   </main><!-- End #main -->


   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
   <script src="./js/main.js"></script>
   <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script type="text/javascript" src="./js/mdb.min.js"></script>

   <script>
      $('.owl-carousel').owlCarousel({
         loop: true,
         margin: 10,
         autoplay: true,
         autoplayTimeout: 3000,
         responsiveClass: true,
         responsive: {
            0: {
               items: 1,

            },
            600: {
               items: 3,

            },
            1000: {
               items: 5,
            }
         }
      })
   </script>

</body>
<!-- ======= Bagian Footer ======= -->
<?php
include './admin/config.php';
$getData = mysqli_query($konfigur, "SELECT * FROM footer");
while ($row = mysqli_fetch_array($getData)) { ?>
   <footer class="footer">
      <div class="footer-top">
         <div class="container">
            <div class="row gy-4">
               <div class="col-lg-3 col-md-12 footer-info">
                  <div class="logo d-flex align-items-center">
                     <img src="./assets/img/desa-karangtengah-3.png" alt="">
                  </div>
                  <p><?= $row['deskripsi']; ?>
                  </p>
                  <a href="./admin">[Administrator]</a>
               </div>

               <div class="col-lg-4 col-md-12 footer-links">
                  <h4>Kontak Kami</h4>
                  <p>
                     <?= $row['alamat']; ?>
                     <strong>Phone </strong>: <a href="https://api.whatsapp.com/send/?phone=<?= $row['telepon']; ?>" target="_blank"><?= $row['telepon']; ?></a> <br>
                     <strong>Email </strong>: karangtengahdesawisata@gmail.com<br>
                  </p>
                  <div class="social-links mt-3">
                     <a href="https://twitter.com/<?= $row['twitter']; ?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                     <a href="https://facebook.com/<?= $row['facebook']; ?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                     <a href="https://instagram.com/<?= $row['instagram']; ?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                  </div>
               </div>

               <div class="col-lg-5 col-md-12 footer-links">
                  <h4>Lokasi Google Maps Desa</h4>
                  <?= $row['maps']; ?>
               </div>

            </div>
         </div>
      </div>

      <div class="container">
         <div class="copyright">
            &copy; Copyright 2022 - <strong><span>Pemerintah Desa Karangtengah</span></strong>
         </div>
      </div>
   </footer><!-- End Footer --><?php } ?>

</html>