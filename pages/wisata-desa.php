<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>Wisata Desa</title>
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
   <main id="main">
      <div class="container">
         <div class="row">

            <!-- <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                     <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                     <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                     <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="overlay-image">
                           <img src="../assets/img/wisata/wisata-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="container">

                           <div class="carousel-caption">
                              <h1>Curug Cipendok</h1>
                              <p>Kecamatan Cilongok, Kabupaten Banyumas, Provinsi Jawa Tengah, Indonesia</p>

                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <img src="../assets/img/banner/Banner2..jpg " class="d-block w-100" alt=" ">
                        <div class="container">
                           <div class="carousel-caption">
                              <h1>Banner Desa</h1>
                              <p>Some representative placeholder content for the second slide of the carousel.</p>

                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <img src="../assets/img/banner/Banner3..jpg" class="d-block w-100" alt="">
                        <div class="container">
                           <div class="carousel-caption">
                              <h1>Banner Desa</h1>
                              <p>Some representative placeholder content for the second slide of the carousel.</p>

                           </div>
                        </div>
                     </div>
                  </div>

               </div> -->

            <main class="my-5">
               <div class="container">
                  <!--Grid row-->
                  <div class="row">
                     <!--Grid column-->
                     <div class="col-md-10 mb-4">
                        <!--Section: Content-->
                        <section>
                           <h3 style="font-weight: bold;">Wisata Desa</h3><br>
                           <!-- Post -->
                           <?php
                           include '../component/header.php';
                           include '../admin/config.php';

                           $batas = 6;
                           $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                           $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                           $previous = $halaman - 1;
                           $next = $halaman + 1;

                           $data = mysqli_query($konfigur, "SELECT * FROM wisata");
                           $jumlah_data = mysqli_num_rows($data);
                           $total_halaman = ceil($jumlah_data / $batas);

                           $getData = mysqli_query($konfigur, "SELECT * FROM wisata limit $halaman_awal, $batas");
                           while ($row = mysqli_fetch_array($getData)) {
                           ?>
                              <div class="row">
                                 <div class="col-md-5 mb-5">
                                    <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
                                       <img src="../assets/img/wisata/<?= $row['foto']; ?>" class="img-fluid" />
                                       <a href="#!">
                                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                       </a>
                                    </div>
                                 </div>

                                 <div class="col-md-7 mb-4">
                                    <h4 style="font-weight: bold;"><?= $row['nama_wisata']; ?></h4>
                                    <p>
                                       <?php echo (str_word_count($row['deskripsi_wisata']) > 50 ? substr($row['deskripsi'], 0, 255) . ' ...' : $row['deskripsi_wisata'])  ?>
                                    </p>

                                    <a href="detail-wisata?id_wisata=<?= $row['id_wisata']; ?>">Lihat Selengkapnya</a>
                                 </div>
                              </div>
                           <?php  }
                           mysqli_close($konfigur); ?>

                        </section>
                        <div class="mx-auto">
                           <nav>
                              <ul class="pagination">
                                 <li class="page-item">
                                    <a class="page-link" <?php if ($halaman > 1) {
                                                            echo "href='?halaman=$previous'";
                                                         } ?>tabindex="-1">Sebelumnya</a>
                                 </li>
                                 <?php
                                 for ($x = 1; $x <= $total_halaman; $x++) {

                                 ?>
                                    <li class="page-item <?php ($next || $previous == $x) ? "active" : "" ?>"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                 <?php } ?>
                                 <li class="page-item">
                                    <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                            echo "href='?halaman=$next'";
                                                         } ?>>Selanjutnya</a>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>


            </main>
            <!--Main layout-->

         </div>
      </div>
   </main>



   <?php
   include '../component/footer.php';
   ?>

   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

</html>