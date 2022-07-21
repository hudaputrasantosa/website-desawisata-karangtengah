<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>Desa Karangtengah</title>
   <link href="assets/img/favicon.png" rel="icon">

   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="css/carousel.css" rel="stylesheet">
   <link href="css/mdb.min.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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
               <li>
                  <a>
                     <div class="input-group">
                        <input type="search" class="form-control form-control-light" placeholder="Cari...">
                     </div>
                  </a>
               </li>
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
               <div class="carousel-indicators">
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
               </div>
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
                  <div class="carousel-item">
                     <img src="assets/img/banner/Banner2..jpg " class="d-block w-100" alt=" ">
                     <div class="container">
                        <div class="carousel-caption">
                           <h1>Banner Desa</h1>
                           <p>Some representative placeholder content for the second slide of the carousel.</p>

                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="assets/img/banner/Banner3..jpg" class="d-block w-100" alt="">
                     <div class="container">
                        <div class="carousel-caption">
                           <h1>Banner Desa</h1>
                           <p>Some representative placeholder content for the second slide of the carousel.</p>

                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>

      <!--Main layout-->
      <main>
         <div class="container">
            <!--Grid row-->
            <div class="row">
               <!--Grid column-->
               <div class="col-md-10">
                  <!--Section: Content-->


                  <h3 style="font-weight: bold;">Berita Terkini</h3><br>
                  <!-- Post -->
                  <?php
                  include './admin/config.php';

                  $getBerita = mysqli_query($konfigur, "SELECT * FROM berita");
                  while ($row = mysqli_fetch_array($getBerita)) {
                  ?>
                     <div class="row">
                        <div class="col-md-4 mb-4">
                           <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                              <img src="assets/img/beritaterkini/<?= $row['foto_berita']?>" class="img-fluid" />
                              <a href="#!">
                                 <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                              </a>
                           </div>
                        </div>

                        <div class="col-md-8 mb-4">
                           <h5><?= $row['judul_berita']; ?></h5>
                           <p class="mb-2">
                              <?= $row['deskripsi']; ?>
                           </p>
                           <button type="button" class="btn-hijau">Baca Selengkapnya</button>
                        </div>
                     </div>

                  <?php }

                  ?>
                  <div class="pt-3 text-center">
                     <a href="berita-desa.html" class="btn-outline">Lihat Berita
                        Selengkapnya..</a>
                  </div>
               </div>


            </div>
         </div>
         <!--Grid row-->
         </div>
      </main>
      <!--Main layout-->


      <div class="container mb-4">
         <h3 style="font-weight: bold;">Pengurus Desa</h3><br>
         <div class="row gy-4">
            <div class="owl-carousel owl-theme">
               <?php
               $getData = mysqli_query($konfigur, "SELECT * FROM pengurus");
               while ($rowPengurus = mysqli_fetch_array($getData)) {
               ?>
                  <div class="card">
                     <div class="img"><img src="assets/img/pengurus/<?= $rowPengurus['foto_pengurus']; ?>" alt=""></div>
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
   <script src="/js/main.js"></script>
   <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script type="text/javascript" src="/js/mdb.min.js"></script>

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
<footer class="footer">
   <div class="footer-top">
      <div class="container">
         <div class="row gy-4">
            <div class="col-lg-3 col-md-12 footer-info">
               <div class="logo d-flex align-items-center">
                  <img src="./assets/img/desa-karangtengah-3.png" alt="">
               </div>
               <p>Desa KarangTengah adalah desa di Kecamatan Cilongok, Banyumas, Jawa Tengah, yang terletak kurang
                  lebih 15 Kilometer ke arah barat dari Purwokerto.
               </p>
               <br>
               <a href="./admin" style="color:white;">(Administrator)
               </a>
            </div>

            <div class="col-lg-4 col-md-12 footer-links">
               <h4>Kontak Kami</h4>
               <p>
                  Desa Karangtengah
                  Kecamatan Cilongok<br>
                  Kabupaten Banyumas, Jawa Tengah<br>
                  <strong>Phone</strong>: 081287756542 <br>
                  <strong>Email</strong>: karangtengahdesawisata@gmail.com<br>
               </p>
               <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/desawisata_karangtengah/" class="instagram"><i class="bi bi-instagram"></i></a>
               </div>
            </div>

            <div class="col-lg-5 col-md-12 footer-links">
               <h4>Lokasi Google Maps Desa</h4>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63315.911774581575!2d109.12677444999998!3d-7.326413549999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f8a4e4942c393%3A0xfb1656ebb45cb522!2sKarangtengah%2C%20Cilongok%2C%20Banyumas%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1651820938369!5m2!1sen!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

         </div>
      </div>
   </div>

   <div class="container">
      <div class="copyright">
         &copy; Copyright <strong><span>Pemerintah Desa Karangtengah</span></strong>. All Rights Reserved
      </div>
   </div>
</footer><!-- End Footer -->

</html>