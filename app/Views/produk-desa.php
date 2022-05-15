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
            <img src="/website-desawisata-karangtengah/public/assets/img/karangtengah.png" alt="">
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
                     <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                     </svg>

                     <div class="container">
                        <div class="carousel-caption text-start">
                           <h1>Example headline.</h1>
                           <p>Some representative placeholder content for the first slide of the carousel.</p>
                           <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                     </svg>

                     <div class="container">
                        <div class="carousel-caption">
                           <h1>Another example headline.</h1>
                           <p>Some representative placeholder content for the second slide of the carousel.</p>
                           <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                     </svg>

                     <div class="container">
                        <div class="carousel-caption text-end">
                           <h1>One more for good measure.</h1>
                           <p>Some representative placeholder content for the third slide of this carousel.</p>
                           <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
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

            <div class="album py-5 bg-light">
               <div class="container">

                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                     <div class="col">
                        <div class="card shadow-sm">
                           <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                              <title>Placeholder</title>
                              <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                           </svg>
                           <div class="card-body">
                              <h5>Ginjal Ori</h5>
                              <h4 style="font-weight: bold;">Rp. 50.000.000</h4>
                              <p>This is a wider card with supporting text below as a natural lead-in </p>
                              <div class="d-flex justify-content-between align-items-center">
                                 <a href="" type="button" class="btn-hijau">Beli Sekarang</a>
                                 <small class="text-muted">9 mins</small>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card shadow-sm">
                           <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                              <title>Placeholder</title>
                              <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                           </svg>
                           <div class="card-body">
                              <h5>Ginjal Ori</h5>
                              <h4 style="font-weight: bold;">Rp. 50.000.000</h4>
                              <p>This is a wider card with supporting text below as a natural lead-in </p>
                              <div class="d-flex justify-content-between align-items-center">
                                 <a href="" type="button" class="btn-hijau">Beli Sekarang</a>
                                 <small class="text-muted">9 mins</small>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card shadow-sm">
                           <img src="/website-desawisata-karangtengah/public/assets/img/portfolio/portfolio-1.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                           <title>Placeholder</title>
                           <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                           </img>
                           <div class="card-body">
                              <h5>Ginjal Ori</h5>
                              <h4 style="font-weight: bold;">Rp. 50.000.000</h4>
                              <p>This is a wider card with supporting text below as a natural lead-in </p>
                              <div class="d-flex justify-content-between align-items-center">
                                 <a href="" type="button" class="btn-hijau">Beli Sekarang</a>
                                 <small class="text-muted">9 mins</small>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
      </div>
   </main>


   <footer class="footer">

      <div class="footer-top">
         <div class="container">
            <div class="row gy-4">
               <div class="col-lg-5 col-md-12 footer-info">
                  <a href="index.html" class="logo d-flex align-items-center">
                     <img src="/desain-pemrograman-web/website-desawisata-karangtengah/public/assets/img/karangtengah.png" alt="">

                  </a>
                  <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                     valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                  <div class="social-links mt-3">
                     <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                     <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                     <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>

                  </div>
               </div>

               <div class="col-lg-2 col-6 footer-links">
                  <h4>Kontak Kami</h4>
                  <p>
                     A108 Adam Street <br>
                     New York, NY 535022<br>
                     United States <br><br>
                     <strong>Phone:</strong> +1 5589 55488 55<br>
                     <strong>Email:</strong> info@example.com<br>
                  </p>
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
   <script src="/website-desawisata-karangtengah/public/js/main.js"></script>
   <script type="text/javascript" src="/website-desawisata-karangtengah/public/js/mdb.min.js"></script>
   <script type="text/javascript" src="/website-desawisata-karangtengah/public/js/script.js"></script>
</body>

</html>