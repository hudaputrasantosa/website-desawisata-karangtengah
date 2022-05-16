<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>Desa Karangtengah</title>
   <link href="assets/img/favicon.png" rel="icon">
   <link href="/website-desawisata-karangtengah/public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="/website-desawisata-karangtengah/public/assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="/website-desawisata-karangtengah/public/css/carousel.css" rel="stylesheet">
   <link href="/website-desawisata-karangtengah/public/css/mdb.min.css" rel="stylesheet">
   <link href="/website-desawisata-karangtengah/public/css/style.css" rel="stylesheet">
</head>

<body>

   <!-- =======  Bagian Header ======= -->
   <header id="header" class="header fixed-top">
      <div class="container container-xl d-flex align-items-center justify-content-between">
         <a href="/website-desawisata-karangtengah/public/home" class="logo align-items-center">
            <img src="/website-desawisata-karangtengah/public/assets/img/desa-karangtengah-2.png" alt="">
         </a>
         <!-- =======  Bagian Navigasi ======= -->
         <nav id="navbar" class="navbar">
            <ul>
               <li><a class="nav-link" href="/website-desawisata-karangtengah/public/home">Beranda</a></li>
               <li class="dropdown"><a href=""><span>Profil Desa</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                     <li><a href="/website-desawisata-karangtengah/public/home/visimisi">Visi dan Misi</a></li>
                     <li><a href="/website-desawisata-karangtengah/public/home/sejarah">Sejarah Desa</a></li>
                  </ul>
               </li>
               <li><a class="nav-link" href="/website-desawisata-karangtengah/public/home/berita">Berita Desa</a></li>
               <li><a class="nav-link" href="/website-desawisata-karangtengah/public/home/wisata">Wisata</a></li>
               <li><a class="nav-link" href="/website-desawisata-karangtengah/public/home/produk">Produk Desa</a></li>
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
               <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
               </button>
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
                  <section>
                     <h3 style="font-weight: bold;">Berita Terkini</h3><br>
                     <!-- Post -->
                     <div class="row">
                        <div class="col-md-4 mb-4">
                           <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                              <img src="/website-desawisata-karangtengah/public/assets/img/beritaterkini/berita1.jpg" class="img-fluid" />
                              <a href="#!">
                                 <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                              </a>
                           </div>
                        </div>

                        <div class="col-md-8 mb-4">
                           <h5>Kemitraan Mahasiswa ITTP dengan Desa Karangtengah</h5>
                           <p class="mb-2">
                              Sebanyak 4 mahasiswa prodi S1 Software Engineering Melaksanakan Kegiatan Kemitraan
                              Dengan desa wisata Karangtengah Kab Cilongok. Kemitraan ini untuk memenuhi project
                              tugas akhir, dengan mengembangkan sebuah perangkat lunak yaitu website desa wisata
                              sebagai media informasi dan promosi.
                           </p>
                           <button type="button" class="btn-hijau">Baca Selengkapnya</button>
                        </div>
                     </div>

                     <!-- Post -->
                     <div class="row">
                        <div class="col-md-4 mb-4">
                           <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                              <img src="/website-desawisata-karangtengah/public/assets/img/beritaterkini/berita1.jpg" class="img-fluid" />
                              <a href="#!">
                                 <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                              </a>
                           </div>
                        </div>

                        <div class="col-md-8 mb-4">
                           <h5>Kemitraan Mahasiswa ITTP dengan Desa Karangtengah</h5>
                           <p class="mb-2">
                              Sebanyak 4 mahasiswa prodi S1 Software Engineering Melaksanakan Kegiatan Kemitraan
                              Dengan desa wisata Karangtengah Kab Cilongok. Kemitraan ini untuk memenuhi project
                              tugas akhir, dengan mengembangkan sebuah perangkat lunak
                              yaitu website desa wisata sebagai media informasi dan promosi.
                           </p>
                           <button type="button" class="btn-hijau">Baca Selengkapnya</button>
                        </div>
                     </div>
                     <div class="pt-3 text-center">
                        <button class="btn-outline">Lihat Selengkapnya</button>
                     </div>
               </div>

            </div>
         </div>
         <!--Grid row-->
         </div>
      </main>
      <!--Main layout-->


      <!-- ======= About Section ======= -->
      <section id="about" class="about">
         <div class="container">
            <div class="row gx-0">

               <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                  <div class="content">
                     <h3>Who We Are</h3>
                     <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti
                        reprehenderit.</h2>
                     <p>
                        Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor
                        consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est
                        corrupti.
                     </p>
                     <div class="text-center text-lg-start">
                        <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                           <span>Read More</span>
                           <i class="bi bi-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>

               <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                  <img src="assets/img/about.jpg" class="img-fluid" alt="">
               </div>

            </div>
         </div>

      </section><!-- End About Section -->

      <!-- ======= Values Section ======= -->
      <section id="values" class="values">

         <div class="container" data-aos="fade-up">

            <header class="section-header">
               <h2>Our Values</h2>
               <p>Odit est perspiciatis laborum et dicta</p>
            </header>

            <div class="row">

               <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="box">
                     <img src="assets/img/values-1.png" class="img-fluid" alt="">
                     <h3>Ad cupiditate sed est odio</h3>
                     <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
                  </div>
               </div>

               <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                  <div class="box">
                     <img src="assets/img/values-2.png" class="img-fluid" alt="">
                     <h3>Voluptatem voluptatum alias</h3>
                     <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
                  </div>
               </div>

               <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                  <div class="box">
                     <img src="assets/img/values-3.png" class="img-fluid" alt="">
                     <h3>Fugit cupiditate alias nobis.</h3>
                     <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
                  </div>
               </div>

            </div>

         </div>

      </section><!-- End Values Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts">
         <div class="container" data-aos="fade-up">

            <div class="row gy-4">

               <div class="col-lg-3 col-md-6">
                  <div class="count-box">
                     <i class="bi bi-emoji-smile"></i>
                     <div>
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Happy Clients</p>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-6">
                  <div class="count-box">
                     <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                     <div>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Projects</p>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-6">
                  <div class="count-box">
                     <i class="bi bi-headset" style="color: #15be56;"></i>
                     <div>
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hours Of Support</p>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-6">
                  <div class="count-box">
                     <i class="bi bi-people" style="color: #bb0852;"></i>
                     <div>
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hard Workers</p>
                     </div>
                  </div>
               </div>

            </div>

         </div>
      </section><!-- End Counts Section -->

   </main><!-- End #main -->

   <!-- ======= Bagian Footer ======= -->
   <footer class="footer">
      <div class="footer-top">
         <div class="container">
            <div class="row gy-4">
               <div class="col-lg-3 col-md-12 footer-info">
                  <div class="logo d-flex align-items-center">
                     <img src="assets/img/desa-karangtengah-3.png" alt="">
                  </div>
                  <p>Desa KarangTengah adalah desa di Kecamatan Cilongok, Banyumas, Jawa Tengah, yang terletak kurang lebih 15 Kilometer ke arah barat dari Purwokerto.
                  </p>
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

   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
   <script src="../public/js/main.js"></script>
   <script type="text/javascript" src="../public/js/mdb.min.js"></script>

</body>

</html>